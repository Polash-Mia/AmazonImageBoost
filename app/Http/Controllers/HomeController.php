<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
   private $products;
   public function index(){
      $this->products = Product::all();
      // return view('admin.product.manage', ['products' => $this->products]);
      return view('website.home.index',['products' => $this->products]);
   }
   public function detail(){
    return view('website.home.detail');
   }
}
