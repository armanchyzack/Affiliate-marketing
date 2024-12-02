<?php

namespace App\Http\Controllers\FrontEndController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AllBlogController extends Controller
{
     function view(){
        return viewBlog('Frontend.all_blog');
     }
}
