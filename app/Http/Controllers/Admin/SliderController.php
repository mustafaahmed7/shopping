<?php

namespace App\Http\Controllers\Admin;

use App\Models\Media;
use App\Models\Products;
use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SliderController extends Controller
{
    public function sliderGet(){
        $sliders = Slider::all();
        return view('admin.settings.slider.slider')->with('sliders',$sliders);
    }
    public function addSliderPost(Request $request){

        $images = $request->get('Images');
        $slider= new Slider();
        $slider->sliderName = $request->get('sliderName');
        $slider->sliderContent =  $request->get('sliderContent');
        $slider->show = (bool)$request->get('Show');
        $slider->productUrl = $request->get('ProductUrl');
        $slider->color = $request->get('color');
        $slider->save();

        $slider->media()->attach($images);

        return redirect('/admin/settings/slider');
    }

    public function addSliderGet(){
        $medias = Media::all();
        return view('admin.settings.slider.add')
            ->with('medias',$medias);
    }

    public function deleteSliderGet($id){
        $slider = Slider::findOrFail($id);
        $slider->delete();
        return redirect('/admin/settings/slider');
    }

    public function updateSliderGet($id){
        $sliders = Slider::where('id',$id)->get();
        $medias = Media::all();
        return view('admin.settings.slider.update')
            ->with('sliders',$sliders)
            ->with('medias',$medias);
    }
    public function updateSliderPost(Request $request){
        $images = $request->get('Images');
        $id = $request->get('id');
        $sliderName = $request->get('sliderName');
        $sliderContent =  $request->get('sliderContent');
        $productUrl = $request->get('ProductUrl');
        $show = (bool)$request->get('Show');
        $color = $request->get('color');
        $slider= new Slider();
        $slider->where('id',$id)->update([
            'sliderName'=> $sliderName,
            'sliderContent' => $sliderContent,
            'productUrl' => $productUrl,
            'show' => $show,
            'color'=>$color
        ]);
        if ($images != null){
            $media_slider = Slider::find($id);
            $media_slider->media()->sync($images);
        }
        return redirect('/admin/settings/slider');
    }
}
