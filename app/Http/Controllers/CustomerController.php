<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use App\Models\Cart_Items;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
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
        return view('customer.shop', compact('product', 'cartItems', 'cartCount', 'total', 'percent_15'));
    }

    // Add Product -> Cart - Customer
    public function cart(Request $req, $id_product)
    {
        if (Auth::user()) {
            $cart = Cart_Items::where('customer_id', $req->customer_id)
                ->where('product_id', $id_product)
                ->first();

            if ($cart) {
                $cart_items = Cart_Items::where('customer_id', $req->customer_id)
                    ->where('product_id', $id_product)
                    ->get();

                $cart_item = $cart_items
                    ->where('product_color', $req->color)
                    ->where('product_size', $req->size)
                    ->first();

                if ($cart_item) {
                    $cart_item->product_amount++;
                    $cart_item->save();
                } else {
                    $product = Product::findOrFail($id_product);
                    $product_id = $id_product;
                    $new_cart_item = new Cart_Items();
                    $new_cart_item->product_id = $product_id;
                    $new_cart_item->customer_id = $req->customer_id;
                    $new_cart_item->product_amount = 1;
                    $new_cart_item->product_price = $product->product_price;
                    $new_cart_item->product_color = $req->color;
                    $new_cart_item->product_size = $req->size;
                    $new_cart_item->save();
                }

                return redirect()
                    ->back()
                    ->with('success_cart', 'Product add to cart successfully!');
            } else {
                $product = Product::findOrFail($id_product);
                $product_id = $id_product;
                $new_cart_item = new Cart_Items();
                $new_cart_item->product_id = $product_id;
                $new_cart_item->customer_id = $req->customer_id;
                $new_cart_item->product_amount = 1;
                $new_cart_item->product_price = $product->product_price;
                $new_cart_item->product_color = $req->color;
                $new_cart_item->product_size = $req->size;
                $new_cart_item->save();

                return redirect()
                    ->back()
                    ->with('success_cart', 'Product add to cart successfully!');
            }
        } else {
            return redirect()
                ->route('welcome')
                ->with('error1', 'You need to log in before adding the product!');
        }
    }

    // Function Delete Product - Cart
    public function DeleteCart($id)
    {
        $cart_delete = Cart_Items::where('product_id', $id)
            ->where('customer_id', auth()->id())
            ->first();
        $cart_delete->delete();
        return redirect()->back();
    }

    // Display Cart - Customer
    public function showCart($id_customer)
    {
        if (Auth::user()) {
            $cartItems = Cart_Items::where('customer_id', $id_customer)->get();

            // $cartItems = DB::table('cart_items')
            //     ->where('customer_id', $id_customer)
            //     ->get();
            if ($cartItems) {
                // $brand = Brand::all();
                // $cart_items = DB::table('cart_items')
                //     ->join('product', 'cart_items.product_id', '=', 'product.id')
                //     ->select('cart_items.*', 'product.product_name', 'product.product_price', 'product.product_image', 'product.brand_id')
                //     ->where('cart_items.customer_id', $id)
                //     ->get();
                // dd($cart_items);
                $total = $cartItems->sum('total');
                $cartCount = count($cartItems);

                $percent = 15 / 100;
                $percent1 = $percent * $total;
                $percent_15 = $total - $percent1;
                return view('customer.cart', compact('cartItems', 'total', 'cartCount', 'percent_15'));
            } else {
                return view('customer.welcome', compact('cartItems'))->with('msg', 'Your cart is empty!');
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
        return view('customer.detail_product', compact('detail_product', 'cartItems', 'total', 'cartCount', 'percent_15'));
    }

    // Display Profile Customer
    public function AccountCustomer()
    {
        $user = User::where('id', auth()->id())->get();
        $cartItems = Cart_Items::where('customer_id', auth()->id())->get();
        $total = $cartItems->sum('total');
        $cartCount = count($cartItems);
        $percent = 15 / 100;
        $percent1 = $percent * $total;
        $percent_15 = $total - $percent1;
        return view('customer.profile', compact('user', 'cartItems', 'total', 'cartCount', 'percent_15'));
    }

    // Function Update Profile Customer
    public function updateProfileCustomer(Request $request)
    {
        if ($request->isMethod('POST')) {
            $user_edit = User::find($request->id);
            if ($user_edit != null) {
                $user_edit->name = $request->name;
                if ($request->avatar != null) {
                    $imageName = $request->file('avatar')->getClientOriginalName();
                    $request->avatar->move(public_path('image/Avatar'), $imageName);
                    if ($user_edit->avatar) {
                        $oldImagePath = public_path('image/Avatar/' . $user_edit->avatar);
                        if (file_exists($oldImagePath)) {
                            unlink($oldImagePath);
                        }
                    }
                    $user_edit->avatar = $imageName;
                }
                $user_edit->save();
                return redirect()->back();
            }
        } else {
        }
    }

    // Display Check Out Customer
    public function DisplayCheckOut()
    {
        if (Auth::user()) {
            $cartItems = Cart_Items::where('customer_id', auth()->id())->get();
            $total = $cartItems->sum('total');
            $cartCount = count($cartItems);
            $percent = 15 / 100;
            $percent1 = $percent * $total;
            $percent_15 = $total - $percent1;

            return view('customer.checkout', compact('cartItems', 'total', 'cartCount', 'percent_15'));
        } else {
            return redirect()
                ->route('welcome')
                ->with('error1', 'You need to log in before checkout your cart!');
        }
    }
}
