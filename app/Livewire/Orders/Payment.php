<?php

namespace App\Livewire\Orders;

use App\Models\Order;
use Livewire\Component;

class Payment extends Component
{
    public $order;
    public $fullName = '';
    public $email = '';
    public $telepon = '';
    public $alamat_pengiriman = '';
    public $cardNumber = '';
    public $cardExpiration = '';
    public $cvv = '';

    public function mount()
    {
        // Get order from session
        $orderId = session('pending_order_id');
        
        \Log::info('Payment mount - Order ID from session: ' . $orderId);
        
        if (!$orderId) {
            \Log::warning('Payment mount - No order ID in session, redirecting to cart');
            session()->flash('error', 'Order tidak ditemukan. Silakan buat pesanan terlebih dahulu.');
            $this->redirectRoute('items.cart');
            return;
        }

        $this->order = Order::with(['orderItems.item'])->find($orderId);
        
        \Log::info('Payment mount - Order loaded: ' . ($this->order ? 'Yes' : 'No'));
        
        if (!$this->order) {
            \Log::warning('Payment mount - Order not found in database');
            session()->flash('error', 'Order tidak ditemukan');
            $this->redirectRoute('items.cart');
            return;
        }
    }

    public function render()
    {
        // If no order, show empty state
        if (!$this->order) {
            return view('livewire.orders.payment-error')->layout('user.pages.orders.payment');
        }
        
        return view('livewire.orders.payment')->layout('user.pages.orders.payment');
    }

    public function processPayment()
    {
        $this->validate([
            'fullName' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telepon' => 'required|string|max:20',
            'alamat_pengiriman' => 'required|string',
            'cardNumber' => 'required|string',
            'cardExpiration' => 'required',
            'cvv' => 'required|digits:3',
        ], [
            'fullName.required' => 'Nama lengkap wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email tidak valid',
            'telepon.required' => 'Nomor telepon wajib diisi',
            'alamat_pengiriman.required' => 'Alamat pengiriman wajib diisi',
            'cardNumber.required' => 'Nomor kartu wajib diisi',
            'cardExpiration.required' => 'Tanggal kadaluarsa wajib diisi',
            'cvv.required' => 'CVV wajib diisi',
            'cvv.digits' => 'CVV harus 3 digit',
        ]);

        try {
            \Log::info('Processing payment', [
                'order_id' => $this->order->order_id,
                'customer_name' => $this->fullName
            ]);

            // Update order status to 'processing' (paid) and save customer info
            $this->order->update([
                'nama_lengkap' => $this->fullName,
                'email' => $this->email,
                'telepon' => $this->telepon,
                'alamat_pengiriman' => $this->alamat_pengiriman,
                'status' => 'processing',
            ]);

            \Log::info('Payment processed successfully', [
                'order_id' => $this->order->order_id,
                'new_status' => 'processing'
            ]);

            // Store order_id for confirmation page
            session()->put('completed_order_id', $this->order->order_id);
            session()->save();
            
            // Clear pending order from session
            session()->forget('pending_order_id');
            
            \Log::info('Redirecting to confirmation', ['completed_order_id' => session('completed_order_id')]);
            
            session()->flash('success', 'Pembayaran berhasil diproses!');
            return $this->redirectRoute('order.confirmation');
        } catch (\Exception $e) {
            \Log::error('Payment processing error: ' . $e->getMessage());
            session()->flash('error', 'Gagal memproses pembayaran: ' . $e->getMessage());
        }
    }
}
