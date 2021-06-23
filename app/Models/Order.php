<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'product_id',
        'quantity',
        'total_price',
        'status',
        'order_at'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'user_id' => 'integer',
        'product_id' => 'integer',
        'quantity' => 'integer',
        'total_price' => 'integer',
        'status' => 'integer',
        'order_at' => 'datetime',
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'user_id');
    }

    public function product()
    {
        return $this->hasOne(Product::class, 'product_id');
    }
}
