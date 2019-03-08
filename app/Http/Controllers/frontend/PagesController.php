<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
// use App\Models\ProductImage;


use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function index()
    {
      $products = Product::orderBy('id', 'desc')->get();
      return view('frontend.pages.index', compact('products'));
    }

    public function products()
    {
      $products = Product::orderBy('id', 'desc')->get();
      return view('frontend.pages.products', compact('products'));
    }
    public function productsByCategory($category_id)
    {
      $products = Product::orderBy('id', 'desc')->where('category',$category_id)->get();
      return view('frontend.pages.productsByCategory', compact('products'));
    }
    public function single_product($id)
    {
      $product = Product::find($id);
      return view('frontend.pages.single_product', compact('product'));
    }

    public function contract()
    {
       return view('frontend.pages.contract');
    }
    public function blogs()
    {
       return view('frontend.pages.blogs');
    }
    public function blog_details()
    {
       return view('frontend.pages.blog_details');
    }


}
