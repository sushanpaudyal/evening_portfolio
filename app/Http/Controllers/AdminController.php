<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Auth;
use Session;
use File;
use Image;
use Illuminate\Support\Facades\Input;

class AdminController extends Controller
{
    public function login(Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->input();
            if(Auth::attempt(['email'=>$data['email'], 'password'=>$data['password'],
                'admin'=>'1'])){
                return redirect()->route('admin.dashboard');
            } else {
                return redirect()->route('admin.login')->with('flash_message_error', 'Invalid Username and Password');
            }
        }
        return view ('admin.admin_login');
    }


    public function dashboard(){
        return view ('admin.adminLayouts.admin_dashboard');
    }

    public function logout(){
        Session::flush();
        return redirect()->route('admin.login')->with('flash_message_success', 'Log Out Successfull');
    }

    public function profile($id){
        $user = User::findOrFail($id);
        return view ('admin.admin_profile', compact('user'));
    }

    public function update(Request $request, $id){
        $user = User::findOrFail($id);
        $data = $request->all();
        if($request->hasFile('image')){
            $image_tmp = Input::file('image');
            if($image_tmp->isValid()){
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = rand(77,777).'.'.$extension;
                $large_image_path = 'public/adminpanel/uploads/profile/'.$filename;
                Image::make($image_tmp)->save($large_image_path);
                $user->image = $filename;
            }
        }
        $user->name = ucwords(strtolower($data['name']));
        $user->email = strtolower($data['email']);
        $user->phone = $data['phone'];
        $user->address = ucwords(strtolower($data['address']));
        $user->about = $data['about'];
        $user->facebook = strtolower($data['facebook']);
        $user->twitter = strtolower($data['twitter']);
        $user->linkedin = strtolower($data['linkedin']);

        $user->save();
        return redirect()->back();
    }
}
