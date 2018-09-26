<?php

namespace App\Http\Controllers\Admin;

use App\Models\Categories;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function category(){
        $categories = Categories::where('categoryId','0')->get();

        return view('admin.category.category')->with('categories',$categories);
    }

    public function addGet(){
        $categories = Categories::where('categoryId','0')->get();
        return view('admin.category.add')->with('categories',$categories);
    }

    public function addPost(Request $request){
        $category =  new Categories();
        if($request->get('Id')!= null) {
            $category->categoryTitle = $request->get('categoryTitle');
            $category->categoryUrl = $request->get('categoryUrl');
            $category->categoryId = $request->get('Id');
        }else{
            $category->categoryTitle = $request->get('categoryTitle');
            $category->categoryUrl = $request->get('categoryUrl');
            $category->categoryId = 0;
        }
        $id = $request->get('Id');
        if ($id != '#') {
            $category->save();
        }

        return redirect('/admin/category');
    }

    public function updateGet($id){
        $categories = Categories::where('Id',$id)->get();
        return view('admin.category.update')->with('categories',$categories);
    }

    public function updatePost(Request $request){
       // $category =  new Categories();
        $id = $request->get('Id');
        $categoryTitle = $request->get('categoryTitle');
        $categoryUrl = $request->get('categoryUrl');

        Categories::where('id',$id)->update(['categoryTitle'=>$categoryTitle,
            'categoryUrl'=> $categoryUrl]);
        return redirect('/admin/category');
    }

    public function deleteGet($id){
        $categories = Categories::findOrFail($id);
        $categories->delete();
        return redirect('/admin/category');
    }
}
