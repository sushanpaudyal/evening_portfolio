<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use File;
use Image;
use Illuminate\Support\Facades\Input;

class AboutController extends Controller
{
    public function index(){
      $about = About::first();
        return view ('admin.about.index', compact('about'));
    }

    public function update(Request $request, $id){
        $about = About::findOrFail($id);
        $data = $request->all();
        if($request->hasFile('image')){
            $image_tmp = Input::file('image');
            if($image_tmp->isValid()){
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = rand(77,777).'.'.$extension;
                $large_image_path = 'public/adminpanel/uploads/about/'.$filename;
                Image::make($image_tmp)->resize(300,300)->save($large_image_path);
                $about->image = $filename;
            }
        }
        $about->content = $data['content'];
        $about->dob = $data['dob'];
        $about->phone = $data['phone'];
        $about->email = $data['email'];
        $about->skype = $data['skype'];
        $about->website = $data['website'];
        $about->fb = $data['fb'];
        $about->twitter = $data['twitter'];
        $about->gmail = $data['gmail'];
        $about->linkedin = $data['linkedin'];
        $about->save();
        return redirect()->route('about')->with('flash_message_info', 'About Updated');
    }
}
