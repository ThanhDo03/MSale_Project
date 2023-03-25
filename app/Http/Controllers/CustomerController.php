<?php

namespace App\Http\Controllers;

use App\Models\Brand;
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
        $cartItems = Cart_Items::where('customer_id', auth()->id())->get();
        $total = $cartItems->sum('total');
        $cartCount = count($cartItems); 
        
        $percent = 15 / 100;
        $percent1 = $percent * $total;
        $percent_15 = $total - $percent1;
        return view('customer.shop', compact('product', 'cartItems','cartCount', 'total', 'percent_15'));
    }

    // Add Product -> Cart - Customer
    public function cart(Request $req, $id_product)
    {
        if (Auth::user()) {
            // session()->forget('cart');
            // print_r(session()->get('cart'));
            // dd('end');

            // $product = Product::find($id_product);

            // $cart = session()->get('cart');
            // if( isset($cart[$id_product])){
            //     $cart[$id_product]['product_amount']++;

            // }else{
            //     $cart[$id_product] = [
            //         'product_name' => $product->product_name,
            //         'product_image' => $product->product_image,
            //         'price_product' => $product->product_price,
            //         'product_amount' => 1,
            //     ];
            // }
            // session()->put('cart', $cart);
            // echo"<pre> </pre>";
            // print_r(session()->get('cart'));
            // return redirect()->back();

            $cart = Cart_Items::where('customer_id', $req->customer_id)
                ->where('product_id', $id_product)
                ->first();
            if ($cart) {
                $cart->product_amount++;
                // $carts = Cart_Items::where([['product_id', '=', $id_product], ['customer_id', '=', $req->customer_id]])->first();
                // $cart_id = $carts->id;

                // $cart_item = Cart_Items::find($cart_id);
                // if ($cart_item) {
                //     $cart_item->product_amount++;
                //     $cart_item->save();
                // }
            } else {
                $product = Product::findOrFail($id_product);
                $product_id = $id_product;
                $cart = new Cart_Items();
                $cart->product_id = $product_id;
                $cart->customer_id = $req->customer_id;
                $cart->product_amount = 1;
                $cart->product_price = $product->product_price;
            }
            $cart->save();

            return redirect()
                ->back()
                ->with('success_cart', 'Product add to cart successfully!');
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
            $data = DB::table('cart_items')
                ->where('customer_id', $id)
                ->get();
            if ($data) {
                $brand = Brand::all();
                $cart_items = DB::table('cart_items')
                    ->join('product', 'cart_items.product_id', '=', 'product.id')
                    ->select('cart_items.*', 'product.product_name', 'product.product_price', 'product.product_image', 'product.brand_id')
                    ->where('cart_items.customer_id', $id)
                    ->get();
                // dd($cart_items);
                return view('customer.cart', compact('cart_items', 'brand'));
            } else {
                $cart_items = Cart_Items::all();
                $cart_items = Product::all();
                return view('customer.cart', compact('cart_items'))->with('msg', 'Your cart is empty!');
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

    // Display Detail Product
    public function Detail_Product($id)
    {
        $detail_product = Product::find($id);
        $cartItems = Cart_Items::where('customer_id', auth()->id())->get();
        $total = $cartItems->sum('total');
        $cartCount = count($cartItems); 
        $percent = 15 / 100;
        $percent1 = $percent * $total;
        $percent_15 = $total - $percent1;
        return view('customer.detail_product', compact('detail_product', 'cartItems', 'total','cartCount','percent_15'));
    }
}
