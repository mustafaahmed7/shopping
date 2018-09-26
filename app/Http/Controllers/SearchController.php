<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request){
        $search = $request->get('search');
       // dd($search);
        $products = Products::where('Title','LIKE','%'.$search.'%')
                    ->orWhere('description','LIKE','%'.$search.'%')->get();
        //dd($products);
        return view('category.category')
            ->with('products',$products)
            ->with('searchString',$search);
    }
}
