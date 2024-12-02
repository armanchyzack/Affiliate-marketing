<?php

namespace App\Http\Controllers\BackendController;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SubCategory;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    function ImageStor($request){
        // Image insert and name Proccess

        $exten  = $request->category_image->extension();
            $name = 'category-' . Str::slug($request->category_slug) . '.' . $exten;
            $path = $request->category_image->storeAs('Image/', $name, 'public');
            $img_url = env('APP_URL') . 'storage/' . $path;
            return [
                'image' => $name,
                'image_url' => $img_url
            ];









    }
    function dataStore($request, $categories,$imagestore = []){
        $categories->title = $request->category_name;
        $categories->slug =  Str::slug($request->category_slug);
        if($request->hasFile('category_image')){
            $categories->image= $imagestore['image'];
            $categories->Image_url = $imagestore['image_url'];
        }
        $categories->save();
    }

    function imageDelete($categories){
            $path = 'Image/' . $categories->image;
            if(Storage::disk('public')->exists($path)){
                Storage::disk('public')->delete($path);
            }
            return true;
    }
    function validation($request){
        $request->validate([
            'category_name' => 'required',
            'category_slug' => 'required|unique:categories,slug',
            'category_image' => 'required|mimes:png,jpg'
        ]);
    }

 //! category controller
    function viewCategory(){
        $categories = Category::select('id','title')->get();
        return view('Backend.Category.category_sub_category',compact('categories'));
    }

    function insertCategory(Request $request){
    // Category Validate

        $this->validation($request);

    // Data store on data base
        $imagestore = $this->ImageStor($request);
        $categories = new Category();
        $categories = $this->dataStore($request,$categories,$imagestore);
        return redirect()->route('category.all')->with('success', 'Category Add Successfully');
    }

    function allCategory(){
        $categories = Category::simplepaginate(10);
        return view('Backend.Category.all_category', compact('categories'));
    }
    function editCategory(Category $categories){
        return view('Backend.Category.edit_category', compact('categories'));
    }
    function updateCategory(Request $request, Category $categories){
        // validation
        if(empty($request->category_name)){
            return redirect()->route('category.edit', $categories->id)->with('category_name', 'this input fieeld can not be empthy');
        }

        $path = 'Image/' . $categories->image;

        if($request->hasFile('category_image')){
            $this->imageDelete($categories);
            $imagestore = $this->ImageStor($request);
            $dataStore = $this->dataStore($request,$categories,$imagestore);
        }else{
            $dataStore = $this->dataStore($request,$categories);
        }
        return redirect()->route('category.all')->with('success', 'Category Updated Successfully');
    }
    function deleteCategory(Category $categories){
        $isDelete = $this->imageDelete($categories);
        if($isDelete){
            $categories->delete();
        }
        return redirect()->route('category.all')->with('deletesuccess', 'Category delete Successfully');
    }
//!-------------------------------sub category controller-----------------------!\\

function data_store($request,$sub_categories){


        $sub_categories->category_id= $request->parent_category;

        $sub_categories->title = $request->sub_category_name;
        $sub_categories->slug = Str::slug($request->sub_category_slug);


}
    function insertSubCategory(Request $request){
        $request->validate([
            'sub_category_name' => 'required|unique:sub_categories,title',
            'sub_category_slug' => 'required|unique:sub_categories,slug',
            'parent_category' => 'required'
        ]);
        $sub_categories = new SubCategory();
        $this->data_store($request,$sub_categories);
        $sub_categories->save();
        return redirect()->route('sub.category.all')->with('success', 'Sub-Category Add Successfully');

    }
    function allSubCategory(){
        $sub_categories = SubCategory::simplepaginate(10);
        return view('Backend.Category.all_sub_category', compact('sub_categories'));
    }


    public function changeStatus(SubCategory $sub_categories)
    {
            if($sub_categories->status == 1){
                $sub_categories->update(['status'=> 0 ]);
            }else{
                $sub_categories->update(['status'=> 1 ]);
            }
            return redirect()->route('sub.category.all')->with('success', 'Sub-Category status changed');
    }

    public function changeCategoryStatus(Category $categories)
    {
            if($categories->status == 1){
                $categories->update(['status'=> 0 ]);
            }else{
                $categories->update(['status'=> 1 ]);
            }
            return redirect()->route('category.all')->with('success', 'Category status changed');
    }

    public function editSubCategory(SubCategory $sub_categories){
        $categories = Category::select('id','title')->get();
        return view('Backend.Category.edit_sub_category', compact('sub_categories','categories'));
    }

    public function updateSubCategory(Request $request, SubCategory $sub_categories){


        $request->validate([
            'sub_category_name' => 'required|unique:sub_categories,title,'. $sub_categories->id,
            'sub_category_slug' => 'required|unique:sub_categories,slug,' . $sub_categories->id,
        ]);

       $this->data_store($request,$sub_categories);
       $sub_categories->save();
       return redirect()->route('sub.category.all')->with('warning', 'Sub-Category Update Successfully');
    }

    public function deleteSubCategory(SubCategory $sub_categories){
        dd($sub_categories);
        $sub_categories->delete();
        return redirect()->route('sub.category.all')->with('deletesuccess', 'Sub-Category delete Successfully');
    }

}
