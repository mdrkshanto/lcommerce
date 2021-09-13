<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
            'productName' => 'required | alpha',
        ]);
        // return $request->all();
        $imgPath = $request->file('productImage');
        dd($imgPath);
    }
}
