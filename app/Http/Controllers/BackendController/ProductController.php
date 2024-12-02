<?php

namespace App\Http\Controllers\BackendController;

use DomDocument;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Env;
use Illuminate\Support\Str;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    //! All Common Function
    function viewProduct()
    {
        $categories = Category::select('id', 'title')->get();
        return view('Backend.Product.add_product', compact('categories'));
    }

    function fetchSubCategory($id)
    {
        $sub_categories = SubCategory::select('id', 'category_id', 'title')->where('category_id', $id)->get();
        return $sub_categories;
    }
    function singleImage($request)
    {
        //single/ Thumbnail Image save
        $extension = $request->thumbnail_image->extension();
        $image_name = Str::slug($request->title) . '.' . $extension;
        $path = $request->thumbnail_image->storeAs('ProductImage', $image_name, 'public');
        $image_url = env('APP_URL') . 'storage/' . $path;
        return [
            'image' => $image_name,
            'image_url' => $image_url
        ];
    }
    function multipleImage($request, $productID)
    {
        // multiple image save
        $gallaryImage = $request->gallary_image;
        foreach ($gallaryImage as $gal_img) {
            $extension = $gal_img->extension();
            $image_name = Str::slug($request->title) . uniqid() . '.' . $extension;
            $path = $gal_img->storeAs('ProductImage', $image_name, 'public');
            $image_url = env('APP_URL') . 'storage/' . $path;


            $products_image = new ProductImage();
            $products_image->product_id = $productID;
            $products_image->image = $image_name;
            $products_image->image_url = $image_url;
            $products_image->save();
        }
    }
    function imageDelete($products)
    {
        $path = 'productimage/' . $products->thumbnail_image;
        if (Storage::disk('public')->exists($path)) {
            Storage::disk('public')->delete($path);
        }
        return true;
    }
    function dataStore($products, $request, $imagestore)
    {
        $products->category_id = $request->category;
        $products->sub_category_id = $request->sub_category;
        $products->title = $request->title;
        $products->slug = Str::slug($request->slug);
        $products->product_name = $request->product_name;
        $products->status = $request->status;
        $products->affiliate_link = $request->affiliate_link;
        $products->keyword = $request->keyword;
        $products->meta_description = $request->meta_desc;
        $products->short_description = $request->short_desc;
        $products->price = $request->price;
        $products->discount_price = $request->dis_price;
        $products->start_date = $request->dis_start_date;
        $products->end_date = $request->dis_end_date;
        $products->description = $request->long_desc;
        $products->image_alt_text = $request->image_alt_text;

        if ($request->hasFile('thumbnail_image')) {
            $products->thumbnail_image = $imagestore['image'];
            $products->thumbnail_image_url = $imagestore['image_url'];
        }
    }

    function ProductValidation($request)
    {
        //?   product validation
        $request->validate([
            'title' => 'required|unique:products,title',
            'slug' => 'unique:products,slug',
            "product_name" => 'required',
            "short_desc" => 'required',
            'thumbnail_image' => 'required|mimes:png,jpg',
            'category' => 'required',
            'sub_category' => 'required',
            'affiliate_link' => 'required',
        ]);
    }

    //! All Common Function end


    function insertProduct(Request $request)
    {


        // Product validation
        $this->ProductValidation($request);

        // data store into product database

        $imagestore = $this->singleImage($request);
        $products = new Product();
        $this->dataStore($products, $request, $imagestore);
        $products->save();
        if ($request->hasFile('gallary_image')) {
            $this->multipleImage($request, $products->id);
        }

        return redirect()->route('product.all')->with('success', 'Your Product Add Successfully');
    }





    function allProduct()
    {
        $products = Product::select('id', 'title', 'product_name', 'status', 'thumbnail_image_url', 'category_id', 'sub_category_id')->get();
        return view('Backend.Product.all_product', compact('products'));
    }


    function changeProductStatus(Product $products)
    {
        if ($products->status == 1) {
            $products->update(['status' => 0]);
        } else {
            $products->update(['status' => 1]);
        }
        return redirect()->route('product.all')->with('warning', 'Product status changed');
    }


    function editProduct(Product $products)
    {
        $categories = Category::select('id', 'title')->get();
        $product_gallary_image = ProductImage::where('id', $products->id)->select('id', 'image', 'image_url')->get();
        return view('Backend.Product.edit_product', compact('categories', 'products', 'product_gallary_image'));
        //
    }

    function updateProduct(Request $request, Product $products)
    {
        // Product VAlidation
        // $this->ProductValidation($request);
        // image checked which are come from request and delete if have
        if ($request->hasFile('thumbnail_image')) {
            // image delete function
            $this->imageDelete($products);
            // image store and get a name
            $imagestore = $this->singleImage($request);
            // data store
            $this->dataStore($products, $request, $imagestore);
        } else {
            // data store
            $this->dataStore($products, $request, $imagestore = []);
            $products->save();
        }
        return redirect()->route('product.all')->with('warning', 'Product update successfully');
    }


    function deleteProduct(Product $products)
    {

        // Product Gallary image called
        $product_gallary_image = ProductImage::where('product_id', $products->id)->get();


        // single image delete
        $isDelete = $this->imageDelete($products);
        $products->delete();
        // Delete the product
        if ($isDelete) {
            foreach ($product_gallary_image as $pImage) {
                $path = 'productImage/' . $pImage->image;
                if (Storage::disk('public')->exists($path)) {
                    Storage::disk('public')->delete($path);
                }
            }
            $products->delete();
        } else {
            return redirect()->route('product.all')->with('warning', 'Product delete undo');
        }
        return redirect()->route('product.all')->with('deletesuccess', 'Product delete successfully');
    }


}
