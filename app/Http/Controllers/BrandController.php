<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Brand;

class BrandController extends Controller
{
    // Display Brand Admin-Staff
    public function showBrand()
    {
        $brand = Brand::latest()->paginate(5);
        return view('admin.brand', compact('brand'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    // Display Add Brand Admin-Staff
    public function addBrand()
    {
        return view('admin.add_brand');
    }
    // Function Add Brand Admin-Staff
    public function store(Request $request)
    {
        if ($request->isMethod('POST')) {
            $validator = Validator::make($request->all(), [
                'brand' => 'required',
                'description' => 'required',
            ]);
            if ($validator->fails()) {
                return redirect()
                    ->back()
                    ->withErrors($validator)
                    ->withInput();
            }
            $newBrand = new Brand();
            $newBrand->name = $request->brand;
            $newBrand->description = $request->description;
            $newBrand->save();
            return redirect()
                ->route('show.brand')
                ->with('success', 'Brand created successfully.');
        }
    }
    // Display Edit Brand Admin-Staff
    public function edit($id)
    {
        $brand = Brand::find($id);
        return view('admin.edit_brand', compact('brand'));
    }

    // Function Edit Brand Admin-Staff
    public function update(Request $request, $id)
    {
        if ($request->isMethod('POST')) {
            $validator = Validator::make($request->all(), [
                'brand' => 'required',
                'description' => 'required',
            ]);
            if ($validator->fails()) {
                return redirect()
                    ->back()
                    ->withErrors($validator)
                    ->withInput();
            }
            $brand = Brand::find($id);
            if ($brand != null) {
                $brand->name = $request->brand;
                $brand->description = $request->description;
                $brand->save();
                return redirect()
                    ->route('show.brand')
                    ->with('success', 'Brand updated successfully');
            } else {
                return redirect()
                    ->route('brand.edit')
                    ->with('Error', 'Brand not update');
            }
        }
    }

    // Function Delete Brand Admin-Staff
    public function destroy($id){
        $brand = Brand::find($id);
        $brand->delete();
        return redirect()->route('show.brand')
            ->with('success','Brand deleted successfully');
    }
}
