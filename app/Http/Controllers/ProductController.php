<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\SubImage;

class ProductController extends Controller
{
    private $products;
    private $product;

    public function index()
    {
        return view('admin.product.index');
    }
    public function create(Request $request)
    {
        $request->validate([
            
            'name'              => 'required',
            'image'             => 'required|image',
        ]);
        //return $request->all();

        $this->product = Product::newProduct($request);
        SubImage::newSubImage($this->product, $request->file('sub_image'));
        return redirect()->back()->with('message', 'Product info create successfully.');
    }

    public function manage()
    {
        $this->products = Product::all();
        return view('admin.product.manage', ['products' => $this->products]);
    }
    public function edit($id)
    {
        $this->product = Product::find($id);
        return view('admin.product.edit', [
            'product'       => $this->product,
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->product = Product::updateProduct($request, $id);

        if ($request->file('sub_image'))
        {
            SubImage::updateSubImage($this->product, $request->file('sub_image'));
        }
        return redirect('/manage-product')->with('message', 'Product info update successfully.');
    }

    public function delete($id)
    {
        Product::deleteProduct($id);
        SubImage::deleteSubImage($id);
        return redirect('/manage-product')->with('message', 'Product info delete successfully.');
    }
}
