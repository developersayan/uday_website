<?php

namespace App\Http\Controllers\Gallery;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
class GalleryController extends Controller
{
    public function index()
    {
        $data = [];
        $data['data'] = Gallery::orderBy('id','desc')->get();
        return view('gallery.index',$data);
    }

    public function insert(Request $request)
    {
        if ($request->image) {
           $ins = new Gallery; 
           $image = $request->image;
           $filename = time() . '-' . rand(1000, 9999) . '.' . $image->getClientOriginalExtension();
            //real image
            $image->move("storage/app/public/gallery",$filename);    
            $ins->image = $filename;
            // $ins->plot = $request->plot;
            $ins->save();
        }
        return redirect()->back()->with('success','Image Saved Successfully');
    }

    public function delete($id)
    {
        $check = Gallery::where('id',$id)->first();
        @unlink('storage/app/public/gallery/'.$check->image);
        Gallery::where('id',$id)->delete();
        return redirect()->back()->with('success','Image Deleted Successfully');
    }

    public function show($id)
    {
        $check = Gallery::where('id',$id)->first();
        if (@$check->show_at_home=="Y") {
            Gallery::where('id',$id)->update(['show_at_home'=>'N']);
        }else{
            Gallery::where('id',$id)->update(['show_at_home'=>'Y']);
        }
        return redirect()->back()->with('success','Data Status Changed Successfully');
    }
}
