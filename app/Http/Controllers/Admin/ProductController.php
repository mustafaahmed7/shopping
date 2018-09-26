<?php

namespace App\Http\Controllers\Admin;

use App\Models\Categories;
use App\Models\Images;
use App\Models\Products;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    public function index ()
    {
        $products = Products::all();
        return view('admin.product.product')->with('products', $products);
    }

    public function addGet ()
    {
        $categories = Categories::where('categoryId', '0')->get();
        return view('admin.product.add')->with('categories', $categories);
    }

    public function addPost (Request $request)
    {

        $images = $this->ImageSave($request->file('Images'));
        if (!empty($images)) {
            $product = new Products();
            $product->title = $request->get('Title');
            $product->description = $request->get('Description');
            $product->price = $request->get('Price');
            $product->inStock = (bool)$request->get('InStock');
            $product->isActive = (bool)$request->get('IsActive');
            $product->quantity = $request->get('Quantity');
            $product->color = $request->get('Color');
            $product->categoryId = $request->get('CategoryId');
            $product->save();

            $img = null;
            $index = 0;
            foreach ($images as $image) {
                $arr = new Images();
                $arr['ImagePath'] = $image;
                $img[$index] = $arr;
                $index++;
            }
            $product->images()->saveMany($img);
        }
        return redirect('/admin/product');
    }

    public function updateGet ($id)
    {
        $this->productId = $id;
        $categories = Categories::where('categoryId', '0')->get();
        $products = Products::where('id', $id)->first();
        return view('admin.product.update')
            ->with('categories', $categories)
            ->with('product', $products);
    }

    public function updatePost (Request $request)
    {
        $id = $request->get('Id');
        $title = $request->get('Title');
        $description = $request->get('Description');
        $price = $request->get('Price');
        $inStock = $request->get('InStock');
        $isActive = $request->get('IsActive');
        $quantity = $request->get('Quantity');
        $color = $request->get('Color');
        $categoryId = $request->get('CategoryId');
        $images = $this->ImageSave($request->file('Images'));

        $img = null;
        if ($images != null) {
            $index = 0;
            foreach ($images as $image) {
                $arr = new Images();
                $arr['ImagePath'] = $image;
                $img[$index] = $arr;
                $index++;
            }
        }
        $product = new Products();
        $product->where('id', $id)
            ->update([
                'title' => $title,
                'description' => $description,
                'price' => $price,
                'inStock' => (bool)$inStock,
                'isActive' =>(bool)$isActive,
                'quantity' => $quantity,
                'color' => $color,
                'categoryId' => $categoryId
            ]);
        if($images != null) {
            $products = Products::find($id);
            $products->images()->saveMany($img);
        }
        return redirect('/admin/product');
    }

    public function removeImageGet($id){
        $image = Images::find($id);
        $ImagePath = $image->ImagePath;
        $image->delete();
        $this->imageRemove('uploads/products/'.$ImagePath);
    }

    public function deleteGet ($id)
    {
        $product = Products::findOrFail($id);
        $product->delete();
        return redirect('/admin/product');
    }


    public function random ()
    {
        $str = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        return substr(str_shuffle(str_repeat($str, 36)), 0, 36);
    }

    public function ImageSave ($request)
    {
        $images = $request;
        $path = null;
        $index = 0;
        // if (!empty($images)) {
        //     foreach ($images as $image) {
        //         $imagePath = $image->getClientOriginalExtension();
        //        $imageName = $this->random() . '.' . $imagePath;
        //        $image->storeAs('uploads/product', $imageName);
        ////        $path[$index] = $imageName;
        //        $index++;
        //    }
        // }
        if (!empty($images)) {
            foreach ($images as $image) {
                $imagePath = $image->getClientOriginalExtension();
                $imageName = $this->random() . '.' . $imagePath;
                $image->move(public_path('uploads/products'), $imageName);
                $path[$index] = $imageName;
                $index++;
            }
        }
        return $path;
    }

    public function imageRemove($image){
        if($image != null) {
            $path = public_path($image);
                if (File::exists($path))
                unlink($path);
        }

    }
}
