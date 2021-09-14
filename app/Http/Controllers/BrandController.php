<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BrandController extends Controller
{
    public function index(){
        $brands = Brand::all();
        return view('backEnd.brands.list.index',compact('brands'));
    }

    public function addBrand(){
        return view('backEnd.brands.addNew.index');
    }

    public function addBrandAction(Request $request){
        $request->validate([
            'brandName' => 'required|unique:brands,brandName',
            'brandStatus' => 'required',
        ]);
        $brand = new Brand();
        $brand->brandName = ucwords(Str::lower($request->brandName));
        $brand->status = $request->brandStatus;
        $brand->save();
        return redirect(route('brandList'))->with('msg','"'.$brand->brandName.'"'.' brand created successfully.');
    }
}
