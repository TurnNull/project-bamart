<?php

namespace App\Services;

use App\Models\Order;
use App\Models\OrderItem;
use App\Facades\Cart;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class OrderService
{
    /**
     * Create order from cart
     */
    public function createOrderFromCart($userId = null)
    {
        $cart = Cart::get();
        
        if (empty($cart['items'])) {
            throw new \Exception('Keranjang kosong');
        }

        return DB::transaction(function () use ($cart, $userId) {
            // Create order (user_id can be null for guest checkout)
            $order = Order::create([
                'user_id' => $userId,
                'status' => 'pending',
                'total_price' => 0, // Will be calculated later
            ]);

            $totalPrice = 0;

            // Create order items from cart
            foreach ($cart['items'] as $item) {
                $subtotal = $item->harga * 1; // quantity = 1 for each duplicate item
                
                OrderItem::create([
                    'order_id' => $order->order_id,
                    'item_id' => $item->item_id,
                    'quantity' => 1,
                    'unit_harga' => $item->harga,
                    'subtotal' => $subtotal,
                ]);

                $totalPrice += $subtotal;
            }

            // Update order total
            $order->total_price = $totalPrice;
            $order->save();

            // Clear cart after successful order
            Cart::clear();

            return $order;
        });
    }

    /**
     * Cancel order
     */
    public function cancelOrder($orderId)
    {
        return DB::transaction(function () use ($orderId) {
            $order = Order::findOrFail($orderId);

            if (!$order->canBeCancelled()) {
                throw new \Exception('Order tidak dapat dibatalkan. Status: ' . $order->status);
            }

            // Delete all order items (cascade will handle this if foreign key is set)
            $order->orderItems()->delete();

            // Delete the order
            $order->delete();

            return true;
        });
    }

    /**
     * Update order status
     */
    public function updateOrderStatus($orderId, $status)
    {
        $order = Order::findOrFail($orderId);
        $order->status = $status;
        $order->save();

        return $order;
    }

    /**
     * Remove single item from order (before checkout)
     */
    public function removeOrderItem($orderItemId)
    {
        return DB::transaction(function () use ($orderItemId) {
            $orderItem = OrderItem::findOrFail($orderItemId);
            $order = $orderItem->order;

            // Delete the order item
            $orderItem->delete();

            // Recalculate order total
            $order->calculateTotal();

            // If no items left, delete the order
            if ($order->orderItems()->count() === 0) {
                $order->delete();
                return null;
            }

            return $order;
        });
    }
}
