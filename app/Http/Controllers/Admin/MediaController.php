<?php

namespace App\Http\Controllers\Admin;

use App\Models\Media;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class MediaController extends Controller
{
    public function media ()
    {
        $medias = Media::all();
        return view('admin.media.media')->with('medias', $medias);
    }

    public function addMediaGet ()
    {
        return view('admin.media.add');
    }

    public function addMediaPost (Request $request)
    {
        $imgPath = $this->MediaSave($request->file('Images'));
        $image = null;
        foreach ($imgPath as $img) {
            $image = $img;
        }
        $media = new Media();
        $media->Title = $request->get('Title');
        $media->Alt = $request->get('Alt');
        $media->Path = $image;
        $media->save();
        return redirect('/admin/media');
    }

    public function updateMediaGet ($id)
    {
        $medias = Media::where('id', $id)->get();
        return view('admin.media.update')->with('medias', $medias);
    }

    public function updateMediaPost (Request $request)
    {
        $saveImage = $this->MediaSave($request->file('Images'));
        $id = $request->get('id');
        $Title = $request->get('Title');
        $Alt = $request->get('Alt');
        $Path = $saveImage;
        $OldImage = $request->get('OldImage');
        //dd($request);
        $this->imageRemove($OldImage);
        $media = new Media();
        $media->where('id',$id)->update([
            'Title'=>$Title,
            'Alt'=>$Alt,
            'Path'=>$Path[0]
        ]);

        return redirect('/admin/media');
    }

    public  function deleteMediaGet($id){
        $media = Media::findOrFail($id);
        $media->delete();
        return redirect('/admin/media');
    }

    public function MediaSave ($request)
    {
        $images = $request;
        $path = null;
        $index = 0;
        if (!empty($images)) {
            foreach ($images as $image) {
                $imagePath = $image->getClientOriginalExtension();
                $imageName = $this->random() . '.' . $imagePath;
                $image->move(public_path('uploads/medias'), $imageName);
                $path[$index] = $imageName;
                $index++;

            }
        }
        return $path;
    }

    public function random ()
    {
        $str = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        return substr(str_shuffle(str_repeat($str, 36)), 0, 36);
    }

    public function imageRemove($image){
        $path = public_path($image);

        if(File::exists($path))
            unlink($path);

    }
}
