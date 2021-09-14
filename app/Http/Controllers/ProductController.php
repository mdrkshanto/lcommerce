<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Form;

class ProductController extends Controller
{
    public function index(){
        return view('backEnd.product.list.index');
    }
    public function addProduct(){
        return view('backEnd.product.addNew.index');
    }
    public function addProductAction(Request $request){
        
        $request->validate([
            'productName' => 'required | alpha',
            'productCetegory' => 'required | numeric',
            'productBrand' => 'required | numeric',
            // 'productName' => 'required | alpha',
        ]);
        
        $img = $request->file('productImage');
        return $img;
        $imgName = time().rand().'.'.$img->getClientOriginalExtension();
        // $img->move(public_path('forntEnd/assets/img/product'),$imgName);
        // $imgPath = public_path('forntEnd/assets/img/product/').$imgName;
        
        return $imgName;
    }
}
