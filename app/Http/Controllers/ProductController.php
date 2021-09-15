<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductColor;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use League\CommonMark\Extension\CommonMark\Node\Inline\Image;
// use Image;

class ProductController extends Controller
{
    public function index(){
        return view('backEnd.product.list.index');
    }
    public function addProduct(){
        $categories = Category::where('status','1')->get();
        $brands = Brand::where('status','1')->get();
        return view('backEnd.product.addNew.index',compact('categories','brands'));
    }
    public function addProductAction(Request $request){
        $product = new Product();
        // $request->validate([
        //     'productName' => 'required | alpha',
        //     'productCetegory' => 'required | numeric',
        //     'productBrand' => 'required | numeric',
        // ]);

        // $img = $request->file('productImage');
        // $imgName = time().rand().'.'.$img->getClientOriginalExtension();
        // $img->move(public_path('forntEnd/assets/img/product'),$imgName);
        // $imgPath = public_path('forntEnd/assets/img/product/').$imgName;
        // return $imgPath;

        $product->productName               = $request->productName;
        $product->cetegoryId                = $request->productCetegory;
        $product->brandId                   = $request->productBrand;
        $product->productModel              = $request->productModelNumber;
        $product->productRegularPrice       = $request->productRegularPrice;
        $product->productDiscountPrice      = $request->productDiscountPrice;
        $product->productDetails            = $request->productDetails;
        $product->productShortDescription   = $request->productShortDescription;
        $product->productDescription        = $request->productDescription;
        $product->productDeliveryProcess    = $request->deliveryProcess;
        $product->productStatus             = $request->productStatus;
        $product->createdBy                 = Auth::user()->name;
        $product->updatedBy                 = Auth::user()->name;
        $product->save();

        // foreach($request->productColor as $value){
        //     $productColor = new ProductColor();
        //     $productColor->productColor = $request->productColor[$value];
        //     $productColor->save();
        // }

        foreach($request->file('productImage') as $key => $value){
            // $imgName = time().rand().'.'.$value->getClientOriginalExtension();
            // $imgPath = public_path('forntEnd/assets/img/product/').$imgName;
            // Image::make($value)->save($imgPath);

            // $img = $request->file('productImage');
            $imgName = time().rand().'.'.$value->getClientOriginalExtension();
            $value->move(public_path('forntEnd/assets/img/product'),$imgName);
            $imgPath = public_path('forntEnd/assets/img/product/').$imgName;

            $productImg = new ProductImage();
            $productImg->productId = $product->id;
            $productImg->imagePath = $imgPath;
            $productImg->imageType = $request->productImageType[$key];
            $productImg->save();
        }
        return 'success';
    }
}
