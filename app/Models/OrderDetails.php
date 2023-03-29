<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    use HasFactory;

    protected $table = 'order_details';

    protected $primaryKey = 'id';

    protected $fillable = ['order_id', 'product_id', 'amount', 'price', 'price', 'total'];

    public function orders(){
        return $this->belongsTo(Order::class, 'order_id','id');
    }

    public function product(){
        return $this->belongsTo(Product::class, 'product_id','id');
    }
}
