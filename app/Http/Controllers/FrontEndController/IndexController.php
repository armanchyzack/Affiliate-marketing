<?php

namespace App\Http\Controllers\FrontEndController;

use App\Models\NavBar;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    function index(){
        $categories = Category::with('SubCategory')->select('id','title')->where('status', 1)->get();

        $featuredProduct = Product::first();           // Get the first product
        $otherProducts = Product::skip(1)->take(4)->get();
        $meta = NavBar::select('title','desc','keyword','logo_url')->first();
        return view('Frontend.index', compact('categories','meta','otherProducts'));
    }


}
