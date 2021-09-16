<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class FrontEndRouteController extends Controller
{
    public function index(){
        $products = Product::where('status','1')->get();
        $productImgs = ProductImage::all();
        return view('frontEnd.home.index',compact('products','productImgs'));
    }

    public function cart(){
        return view('frontEnd.cart.index');
    }

    public function contact(){
        return view('frontEnd.contact.index');
    }

    public function product(){
        return view('frontEnd.product.index');
    }
}
