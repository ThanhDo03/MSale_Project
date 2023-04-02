<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RequestPassword;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    // Sign In
    public function login(Request $req){
        if (Auth::attempt(['email'=>$req->email_name, 'password'=>$req->pwd])){
            if(Auth::check()){
                if(Auth::user()->role == 1){
                    return view('admin.home');
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
    // Display Admin Home
    public function AdminHome(){
        return view('admin.home');
    }

    // Display Admin Product
    public function AdminProduct(){
        $products = Product::all();
        return view('admin.product', compact('products')); 
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
            $users = User::find($id);
            // $user = DB::table('users')->where('id', $id)->get();
            return view('admin.profile', compact('users'));
    }

    // Function Update Profile Admin
    public function updateProfile(Request $request){
        if($request->isMethod('POST')){
            $user_edit = User::find($request->id);
            if($user_edit != null){
                $user_edit->name = $request->name;
                $user_edit->email = $request->email;
                if($request->avatar != null){
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
        }
        else{

        }
    }

    // Display Change Pwd Admin
    public function Password(){
        return view('admin.change_pwd');
    }

    // Function Change Pwd Admin
    public function changePwd(RequestPassword $request){
        $users = User::findOrFail($request->id);
        // $current_users = auth()->user();
        if (Hash::check($request->old_password, $users->password)) {
            $users->update([
                'password'=>bcrypt($request->password)
            ]);
            return redirect()
                ->back()
                ->with('successPwd', 'Password changed');
        } else {
            return redirect()
                ->back()
                ->with('errorPwd','Password does not match');
        }
        // $validator = Validator::make($request->all(), [
        //     'password'        => 'required',
        //     'new_password'         => 'required|min:8|max:30',
        //     'confirm_password' => 'required|same:new_password'
        // ]);
        // if ($validator->fails()) {
        //     return response()->json([
        //         'message' => 'validations fails',
        //         'errors' => $validator->errors()
        //     ], 422);
        // }
        // $user = $request->user();
    }
}
