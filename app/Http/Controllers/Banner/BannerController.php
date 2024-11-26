<?php

namespace App\Http\Controllers\Banner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
class BannerController extends Controller
{
    public function index()
    {
        $data = [];
        $data['data'] = Banner::get();
        return view('banner.index',$data);
    }

    public function insert(Request $request)
    {
        $ins = [];
        $ins['heading'] = $request->heading;
        $ins['description'] = $request->description;
        if ($request->image) {
           $image = $request->image;
           $filename = time() . '-' . rand(1000, 9999) . '.' . $image->getClientOriginalExtension();
            //real image
            $image->move("storage/app/public/banner",$filename);    
            $ins['image'] = $filename;
        }
        Banner::create($ins);
        return redirect()->back()->with('success','Data Saved Successfully');
    }

    public function delete($id)
    {
        $check = Banner::where('id',$id)->first();
        @unlink('storage/app/public/banner/'.$check->image);
        Banner::where('id',$id)->delete();
        return redirect()->back()->with('success','Data Deleted Successfully');
    }
}
