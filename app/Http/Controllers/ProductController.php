<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
    // Function Admin Upload Product
    public function store(Request $request)
    {
        if ($request->isMethod('POST')) {
            $product = DB::table('product')
                ->where('product_name', $request->name_product)
                ->first();
            if (!$product) {
                $newProdcuct = new Product();
                $newProdcuct->product_name = $request->name_product;
                $newProdcuct->brand_id = $request->brand_product;
                $newProdcuct->product_price = $request->price_product;
                $name = $request->file('image_product')->getClientOriginalName();
                $request->file('image_product')->move(public_path('image/Product'), $name);
                $newProdcuct->product_image = $name;
                $newProdcuct->product_amount = $request->amount_product;
                $newProdcuct->Staff = $request->staff;
                $newProdcuct->Status = $request->status_product;
                $newProdcuct->product_des = $request->des_product;
                $newProdcuct->save();
                $products = Product::all();
                return redirect()
                    ->route('home.admin', compact('products'))
                    ->with('message', 'Create product success!');
            } else {
                return redirect()
                    ->route('upload.Product')
                    ->with('error2', 'Product exist!');
            }
        }
    }

    // Display & Function Update Product
    public function edit($id)
    {
        $product_edit = Product::find($id);
        $brand = \App\Models\Brand::select('id','name')->get();
        return view('admin.edit_product', ['product' => $product_edit, 'brand' => $brand]);
    }

    public function update(Request $request)
    {
        if ($request->isMethod('POST')) {
            $product_edit = Product::find($request->id);
            if ($product_edit != null) {
                $product_edit->product_name = $request->name_product;
                $product_edit->brand_id = $request->brand_product;
                $product_edit->product_price = $request->price_product;
                if ($request->file('image_product')) {
                    $name = $request->file('image_product')->getClientOriginalName();
                    $request->file('image_product')->move(public_path('image/Product'), $name);
                    $product_edit->product_image = $name;
                }
                $product_edit->product_amount = $request->amount_product;
                $product_edit->Staff = $request->staff;
                $product_edit->Status = $request->status_product;
                $product_edit->product_des = $request->des_product;
                $product_edit->save();
                $products = Product::all();
                return redirect()
                    ->route('home.admin', compact('products'))
                    ->with('success', 'Product updated successfully!');
            }
        }
    }

    // Function Delete Product
    public function delete($id)
    {
        $product_delete = Product::find($id);
        $product_delete->delete();
        return redirect()
            ->route('home.admin')
            ->with('success', 'Product deleted successfully');
    }

    // Function Search Product Customer
    public function search(Request $request){
        $search = $request->ProductSearch;
        $product = Product::where('product_name', 'LIKE', '%'.$search.'%')->get();
        return view('customer.search_product', compact('product'), ['successMsg'=>'Search results for'.$search]);
    }

}
