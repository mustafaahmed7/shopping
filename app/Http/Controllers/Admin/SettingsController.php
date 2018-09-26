<?php

namespace App\Http\Controllers\Admin;

use App\Models\Media;
use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingsController extends Controller
{
    public function settingsGet(){
        $sliders = Slider::all();
        return view('admin.settings.settings')->with('sliders',$sliders);
    }
}
