<?php

namespace App\Http\Controllers;
use App\Models\banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    //
    public function BannerList(){
        $banners=banner::all();
        $data=compact('banners');
        return view('admin.banner')->with($data);
    }
}
