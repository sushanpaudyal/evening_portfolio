<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;
use File;
use Image;
use Illuminate\Support\Facades\Input;

class SliderController extends Controller
{
    public function index(){
        $slider = Slider::first();
        return view ('admin.slider.index', compact('slider'));
    }

    public function update(Request $request, $id){
        $slider = Slider::findOrFail($id);
        $data = $request->all();
        if($request->hasFile('image')){
            $image_tmp = Input::file('image');
            if($image_tmp->isValid()){
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = rand(77,777).'.'.$extension;
                $large_image_path = 'public/adminpanel/uploads/slider/'.$filename;
                Image::make($image_tmp)->save($large_image_path);
                $slider->image = $filename;
            }
        }
        $slider->name = ucwords(strtolower($data['name']));
        $slider->designation = ucwords(strtolower($data['designation']));
        $slider->content = $data['content'];
        $slider->save();
        return redirect()->route('slider')->with('flash_message_info', 'Slider Has Been Updated Successfully');
    }
}
