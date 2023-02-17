<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'product_description',
        'product_price',
        'post_title',
        'category_id',
        'brand_id',
        'product_status',
        'post_status',
        'post_images',
        'report',
        'order',
        'seller_id'
    ];
    protected $casts = [
        'post_images' => 'array'
    ];

    public function author() {
       return $this->belongsTo(User::class, 'seller_id');
    }

    public function productStatus() {
        return $this->belongsTo(ProductStatus::class, 'product_status');
    }

    public function postStatus() {
        return $this->belongsTo(PostStatus::class, 'post_status');
    }

    public function brand() {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    public function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
