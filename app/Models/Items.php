<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Items extends Model
{
    protected $table = 'items';
    protected $primaryKey = 'item_id';
    protected $guarded = ['item_id'];

    protected static function booted() {
        static::creating(function($model) {
            $model->user_id = Auth::user()->id;
        });
    }

    // public function getRouteKeyName() {
    //     return 'slug';
    // }
}
