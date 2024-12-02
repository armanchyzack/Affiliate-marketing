<?php

namespace App\Http\Controllers\BackendController;

use App\Models\NavBar;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class NavBarController extends Controller
{


    function dataStore($request,$navs){

        $navs->title = $request->meta_title;
        $navs->desc = $request->meta_desc;
        $navs->keyword = $request->meta_keyword;
        if($request->hasFile('logo')){

            $exten  = $request->logo->extension();
            $name = Str::slug($request->meta_title) . '.' . $exten;
            $path = $request->logo->storeAs('Image', $name, 'public');
            $img_url = env('APP_URL') . 'storage/' . $path;

            $navs->logo_name = $name;
            $navs->logo_url = $img_url;
        }
        $navs->save();
    }





    function view(){

        $navs = NavBar::first();
        if($navs){
            return view('Backend.NAV.edit', compact('navs'));
        }else{
            return view('Backend.NAV.nav_section');
        }
    }

    function insert(Request $request){

        $request->validate([
            'meta_title' => 'max:60',
            'meta_desc' => 'max:160'
        ]);
        $navs = new NavBar();
        $this->dataStore($request,$navs);
        return redirect()->route('navbar.update',$navs->id)->with('success', 'Meta tags add successfully!');
    }

    function update(Request $request, NavBar $navs){

        $request->validate([
            'meta_title' => 'max:60,$navs->id',
            'meta_desc' => 'max:160,$navs->id'
        ]);
        if($request->logo){
            $path = 'Image/' . $navs->logo_name;
            if(Storage::disk('public')->exists($path)){
                Storage::disk('public')->delete($path);
            }
            $this->dataStore($request,$navs);
        }else{
            $this->dataStore($request,$navs);
        }
        return back();


    }




}
