<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index(){
        $products = new Product();
        return view('backEnd.product.list.index',compact('products'));
    }

    public function addNew(){
        $brands = Brand::all();
        $categories = Category::all();
        return view('backEnd.product.addNew.index',compact('brands','categories'));
    }

    public function add(Request $request){
        // return $request->file('image');
        // dd($request->file('image'));
        // $product = new Product();
        // $product->productName = $request->name;
        // $product->categoryId = $request->cetegory;
        // $product->brandId = $request->brand;
        // $product->model = $request->model;
        // $product->regularPrice = $request->regularPrice;
        // $product->discountPrice = $request->discountPrice;
        // $product->details = $request->details;
        // $product->shortDescription = $request->shortDescription;
        // $product->description = $request->description;
        // $product->deliveryProcess = $request->deliveryProcess;
        // $product->status = $request->status;
        // $product->createdBy = Auth::user()->name;
        // $product->save();


        // foreach($request->file('image') as $key => $value){
        //     $imgName = time().rand().'.'.$value->extension();
        //     $value->move(public_path('frontEnd/assets/img/product'),$imgName);
        //     $imgPath = 'frontEnd/assets/img/product/'.$imgName;
        //     dd($imgPath);
        //     // return $request->all();
        // }
        // $imgs = new ProductImage();
        // $imgs->productId = $product->id;

    }
}
