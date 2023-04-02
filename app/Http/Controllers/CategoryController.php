<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    // Display Admin Category
    public function index()
    {
        $categories = Category::latest()->paginate(5);

        return view('admin.category', compact('categories'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // Display Add Admin Category
    public function create()
    {
        return view('admin.add_category');
    }

    // Function Add Admin Category
    public function store(Request $request)
    {
        if ($request->isMethod('POST')) {
            $validator = Validator::make($request->all(), [
                'category' => 'required',
            ]);
            if ($validator->fails()) {
                return redirect()
                    ->back()
                    ->withErrors($validator)
                    ->withInput();
            }
            $newCategory = new Category();
            $newCategory->name = $request->category;
            $newCategory->save();
            return redirect()
                ->route('category.admin')
                ->with('success', 'Category created successfully.');
        }
    }

    // Display Edit Admin Category
    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.edit_category', ['category' => $category]);
    }

    public function update(Request $request, $id)
    {
        if ($request->isMethod('POST')) {
            $validator = Validator::make($request->all(), [
                'category' => 'required',
            ]);
            if ($validator->fails()) {
                return redirect()
                    ->back()
                    ->withErrors($validator)
                    ->withInput();
            }
            $category = Category::find($id);
            if ($category != null) {
                $category->name = $request->category;
                $category->save();
                return redirect()
                    ->route('category.admin')
                    ->with('success', 'Category updated successfully');
            } else {
                return redirect()
                    ->route('category.admin')
                    ->with('Error', 'Category not update');
            }
        }
    }

    // Function Delete Category Admin
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()
            ->route('category.admin')
            ->with('success', 'Category deleted successfully');
    }
}
