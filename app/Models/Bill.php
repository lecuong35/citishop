<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;

    protected $fillable = [
        'seller_id',
        'customer_id',
        'post_id',
        'order_status',
        'time_receive',
        'created_at',
        'updated_at',

    ];

    public function post() {
        return $this->belongsTo(Post::class, 'post_id');
    }

    public function seller() {
        return $this->belongsTo(User::class, 'seller_id');
    }

    public function customer() {
        return $this->belongsTo(User::class, 'customer_id');
    }

    public function orderStatus() {
        return $this->belongsTo(OrderStatus::class, 'order_status');
    }
}
