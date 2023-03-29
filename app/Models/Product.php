<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';

    protected $primaryKey = 'id';
    
    public function brand(){
        return $this->belongsTo('App\Models\Brand', 'brand_id');
    }

    public function cart_items(){
        return $this->belongsTo('App\Models\Cart_Items','product_id');
    }

    public function product_details(){
        return $this->hasMany(ProductDetails::class, 'product_id','id');
    }

    public function order_details(){
        return $this->hasMany(OrderDetails::class, 'product_id','id');
    }

    protected $fillable = ['product_name', 'brand_id', 'product_price', 'product_image', 'product_amount','Staff','Status','product_des','sale'];
}
