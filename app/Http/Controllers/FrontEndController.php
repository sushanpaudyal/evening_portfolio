<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(){
        $slider = Slider::first();
        return view ('front.index', compact('slider'));
    }
}
