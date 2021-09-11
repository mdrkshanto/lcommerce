<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndRouteController extends Controller
{
    public function index(){
        return view('frontEnd.home.index');
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
