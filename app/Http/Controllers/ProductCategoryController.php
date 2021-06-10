<?php

namespace App\Http\Controllers;

use App\Models\Product_Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['category'] = Product_Category::all();
        return view('admin.category.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new Product_Category();
        if ($request->has("image")) {
            $imageName = Str::uuid();
            $category->image = $imageName;
            ImageController::produk($request->file("image"), $imageName);
        }
        $category->name = $request->name;
        $category->save();

        return redirect()->route('category-product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product_Category  $product_Category
     * @return \Illuminate\Http\Response
     */
    public function show(Product_Category $product_Category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product_Category  $product_Category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['product_Category'] = Product_Category::findOrFail($id);
        return view('admin.category.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product_Category  $product_Category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = Product_Category::findOrFail($id);
        if ($request->hasFile("image")) {
            $imageName = Str::uuid();
            ImageController::produk($request->file("image"), $imageName, $category->url);
            $category->image = $imageName;
        }
        if ($request->has("name")) {
            $category->name = $request->input("name");
        }
        $category->save();
        return redirect()->route('category-product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product_Category  $product_Category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product_Category = Product_Category::findOrFail($id);
        $product_Category->delete();

        return redirect()->route('category-product.index');
    }
}
