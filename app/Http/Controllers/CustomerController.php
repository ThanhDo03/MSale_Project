<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart_Items;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    // Display Customer
    public function Customer()
    {
        $product = Product::all();
        $cart_items = Cart_Items::all();
        return view('customer.shop', compact('product', 'cart_items'));
    }

    // Add Product -> Cart - Customer
    public function cart(Request $req, $id_product)
    {
        if (Auth::user()) {
            $product_id = $id_product;
            $cart_items = new Cart_Items();
            $cart_items->product_id = $product_id;
            $cart_items->customer_id = $req->customer_id;
            $cart_items->save();
            $product = Product::all();
            return view('customer.shop', compact('product'));
        } else {
            return redirect()
                ->route('welcome')
                ->with('error1', 'You need to log in before adding the product!');
        }
    }

    // Display Cart - Customer
    public function showCart($id)
    {
        if (Auth::user()) {
            $data = DB::table('cart_items')->where('customer_id', $id)->get();
            if ($data) {
                
                $cart_items = DB::table('cart_items')
                    ->join('product','cart_items.product_id','=','product.id')
                    ->select('cart_items.*','product.product_name','product.product_price','product.product_image','product.brand_id')
                    ->where('cart_items.customer_id', $id)
                    ->get();
                // dd($cart_items);
                return view('customer.cart', compact('cart_items'));
            }else{
                $cart_items = Cart_Items::all();
                $cart_items = Product::all();
                return view('customer.cart', compact('cart_items'))->with('msg','Your cart is empty!');
            }
        } else {
            return redirect()
                ->route('welcome')
                ->with('error1', 'You need to log in before adding the product!');
        }
    }

    public function showCart_NoUser()
    {
        if (!Auth::user()) {
            return redirect()
            ->route('welcome')
            ->with('error1', 'You need to be logged in to view your shopping cart!');
        } 
    }
}
