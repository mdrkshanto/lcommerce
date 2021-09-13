<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('backEnd.Category.list.index', compact('categories'));
    }

    public function addCategory(){
        return view('backEnd.Category.addNew.index');
    }

    public function addCategoryAction(Request $request){
        $category = new Category();
        $category->categoryName = $request->categoryName;
        $category->status = $request->categoryStatus;
        $category->save();
        return redirect(route('categoryList'))->with('msg',$category->categoryName.' category created successfully.');
    }
}
