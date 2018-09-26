<?php

namespace App\Http\Controllers\Admin;

use App\Models\Categories;
use App\Models\Coupons;
use App\Models\Products;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CouponController extends Controller
{

    public function coupon ()
    {
        $coupons = Coupons::all();
        return view('admin.coupons.coupon')->with('coupons', $coupons);
    }

    public function addCouponGet ()
    {
        $categories = Categories::where('categoryId', '0')->get();
        $products = Products::all();
        return view('admin.coupons.add')
            ->with('categories', $categories)
            ->with('products', $products);
    }

    public function addCouponPost (Request $request)
    {
        $category_id = $request->get("category_id");
        $product_id = $request->get('product_id');
        $coupon = new Coupons();
        $coupon->name = $request->get("name");
        $coupon->code = $request->get("code");;
        $coupon->type = $request->get("type");
        $coupon->discount = $request->get("discount");
        $coupon->total = $request->get("total");
        $coupon->shipping = $request->get("shipping");

        $coupon->date_start = $request->get("date_start");
        $coupon->date_end = $request->get("date_end");
        //$coupon->uses_total = $request->get("uses_total");
        //$coupon->uses_customer = $request->get("uses_customer");
        $coupon->status = (boolean)$request->get("status");
        $coupon->save();
        $coupon->product()->attach($product_id);
        $coupon->category()->attach($category_id);

        return redirect('/admin/coupon');
    }

    public function updateCouponGet ($id)
    {
        $coupon = Coupons::where('id', $id)->first();

        $product_id = null;
        $index = 0;
        if ($coupon->product != null) {
            foreach ($coupon->product as $product) {
                $product_id[$index] = $product->id;
                $index++;
            }
        }

        $category_id = null;
        $index = 0;
        if ($coupon->category != null) {
            foreach ($coupon->category as $category) {
                $category_id[$index] = $category->id;
                $index++;
            }
        }
        if($product_id != null)
        $products = Products::whereNotIn('id', $product_id)->get();
        else
        $products = Products::all();

        $categories = Categories::where('categoryId', '0')->get();

        $result = null;
        $index = 0;
        if ($categories != null) {
            foreach ($categories as $category) {
                $result[$index] = $category;
                $index++;
                foreach ($category->subCategory as $subCategory) {
                    $result[$index] = $subCategory;
                    $result[$index]->categoryTitle = $category->categoryTitle
                        . '>' . $subCategory->categoryTitle;
                    $index++;
                    foreach ($subCategory->subCategory as $subSubCategory) {
                        $result[$index] = $subSubCategory;
                        $result[$index]->categoryTitle = $subCategory->categoryTitle
                            . '>' . $subSubCategory->categoryTitle;
                        $index++;
                    }
                }
            }
        }
        return view('admin.coupons.update')
            ->with('coupon', $coupon)
            ->with('products', $products)
            ->with('categories', $result);
    }

    public function updateCouponPost (Request $request)
    {
        // dd($request);
        $id = $request->get('id');
        $category_id = $request->get("category_id");
        $product_id = $request->get('product_id');
        $name = $request->get("name");
        $code = $request->get("code");;
        $type = $request->get("type");
        $discount = $request->get("discount");
        $total = $request->get("total");
        $shipping = $request->get("shipping");
        $date_start = $request->get("date_start");
        $date_end = $request->get("date_end");
        //$uses_total = $request->get("uses_total");
        //$uses_customer = $request->get("uses_customer");
        $status = (boolean)$request->get("status");
        $coupon = new Coupons();
        $coupon->where('id', $id)->update([
            "name" => $name,
            "code" => $code,
            "type" => $type,
            "discount" => $discount,
            "total" => $total,
            "shipping" => $shipping,
            "date_start" => $date_start,
            "date_end" => $date_end,
            "status" => $status
        ]);

        $_coupon = $coupon->find($id);
        $_coupon->product()->sync($product_id);
        $_coupon->category()->sync($category_id);

        return redirect('/admin/coupon/update/'.$id);
    }


    public function deleteCouponGet ($id)
    {
        $coupon = Coupons::findOrFail($id);
        $coupon->delete();
        return redirect('/admin/coupon');
    }
}
