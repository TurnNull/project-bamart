<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $table = 'order_items';
    protected $primaryKey = 'order_item_id';
    protected $fillable = [
        'order_id',
        'item_id',
        'quantity',
        'unit_harga',
        'subtotal',
    ];

    protected $casts = [
        'quantity' => 'integer',
        'unit_harga' => 'decimal:2',
        'subtotal' => 'decimal:2',
    ];

    // Relationship to Order
    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id', 'order_id');
    }

    // Relationship to Item
    public function item()
    {
        return $this->belongsTo(Items::class, 'item_id', 'item_id');
    }

    // Calculate subtotal automatically
    protected static function boot()
    {
        parent::boot();

        static::saving(function ($orderItem) {
            $orderItem->subtotal = $orderItem->quantity * $orderItem->unit_harga;
        });
    }
}
