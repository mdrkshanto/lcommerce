<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Auth\Events\Validated;
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
        $request->validate([
            'categoryName' => 'required|unique:categories,categoryName',
            'categoryStatus' => 'required',
        ]);
        $category = new Category();
        $category->categoryName = ucwords($request->categoryName);
        $category->status = ucwords($request->categoryStatus);
        $category->save();
        return redirect(route('categoryList'))->with('msg',$category->categoryName.' category created successfully.');
    }

    public function editCategory($id){
        $data = Category::find($id);
        return view('backEnd.Category.edit.index',compact('data'));
    }

    public function updateCategory(Request $request, $id){
        $request->validate([
            'categoryName' => 'required|unique:categories,categoryName',
            'categoryStatus' => 'required',
        ]);
        $category = Category::find($id);
        $category->categoryName = ucwords($request->categoryName);
        $category->status = ucwords($request->categoryStatus);
        $category->update();
        return redirect(route('categoryList'))->with('msg',$category->categoryName.' category updated successfully.');
    }

    public function deleteCategory($id){
        $category = Category::find($id);
        $category->delete();
        return redirect(route('categoryList'))->with('msg',$category->categoryName.' category deleted successfully.');
    }
}
