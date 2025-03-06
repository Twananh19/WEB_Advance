<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product; 

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function home()
    {
        $product = Product::all();
        return view('home.index', compact('product'));
    }

    public function login_home()
    {
        $product = Product::all();
        return view('home.index', compact('product'));
    }

    public function product_details($id)
    {
        $data=Product::find($id);
        return view('home.product_details', compact('data'));
    }
}
