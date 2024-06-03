<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function show_reg(){
        return view('guest.reg');
    }

    public function show_auth(){
        return view('guest.auth');
    }

    public function show_welcome(){
        return view('welcome');
    }

    public function show_cart(){
        return view('user.cart');
    }

    public function show_catalog(){
        return view('guest.catalog');
    }

    public function show_categories(){
        $categories = Category::all();
        return view('admin.category.index',['categories'=>$categories]);
    }

    public function show_add_categories(){
        return view('admin.category.add');
    }
}
