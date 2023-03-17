<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // Sign In
    public function login(Request $req){
        if (Auth::attempt(['email'=>$req->email_name, 'password'=>$req->pwd])){
            if(Auth::check()){
                if(Auth::user()->role == 1){
                    $products = Product::all();
                    return view('admin.management', compact('products'));
                }else{
                    return redirect()->route('customer')->with('msg','');
                }
            }
        }else{
            return redirect()->route('welcome')->with('error', 'Invalid username or password :((');
        }
    }

    // Sign Up
    public function store(Request $request){
        if ($request->isMethod('POST')){
            $user = DB::table('users')->where('email', $request->email)->first();
            if (!$user){
                $newUser = new User();
                $newUser->email = $request->email;
                $newUser->name = $request->name;
                $newUser->password = $request->password;
                $newUser->save();
                return redirect()->route('welcome')->with('message', 'Create account success! Please login!');
            }else{
                return redirect()->route('welcome')->with('error1', 'Account exist!');
            }
        }
    }
    
    // Display Admin Management
    public function AdminManagement(){
        $products = Product::all();
        return view('admin.management', compact('products')); 
    }

    // Display Admin Product Sale %
    public function AdminProductSale(){
        $products = Product::all();
        return view('admin.display_product_sale', compact('products'));
    }

    // Display Admin Upload Product
    public function UploadProduct(){
        $brand = \App\Models\Brand::select('id','name')->get();
        return view('admin.add_product', compact('brand'));
    }

    // Display Admin-Staff
    public function staff(){
        if (Auth::user()->role == 1) {
            $staff = DB::table('users')->where('role', 1)->get();
            return view('admin.staff', compact('staff'));
        }
    }

    // Display Add Account Admin-Staff
    public function showAddAccount(){
        return view('admin.add_account');
    }

    // Function Search Product Admin
    public function search(Request $request){
        $search = $request->SearchProduct;
        $products = Product::where('product_name', 'LIKE', '%'.$search.'%')->get();
        return view('admin.search_product', compact('products'), ['successMsg'=>'Search results for'.$search]);
    }

    // Function Add Account Admin - Cusstomer
    public function store1(Request $request){
        if ($request->isMethod('POST')){
            $user = DB::table('users')->where('email', $request->email)->first();
            if (!$user){
                $newUser = new User();
                $newUser->email = $request->email;
                $newUser->name = $request->name;
                $newUser->password = $request->password;
                $newUser->role = $request->role;
                $newUser->save();
                return redirect()->route('auth.staff')->with('message', 'Create account success!');
            }else{
                return redirect()->route('auth.staff')->with('error1', 'Account exist!');
            }
        }
    }

    // Display Profile
    public function displayProfile($id){
        if(Auth::user()->id == $id){
            $user = DB::table('users')->where('id', $id)->get();
            return view('admin.profile', compact('user'));
        }
    }
}
