<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
class ServiceController extends Controller
{
    
    public function index()
    {
        $data = [];
        $data['data'] = Service::orderBy('id','desc')->get();
        return view('gallery.service',$data);
    }

    public function insert(Request $request)
    {
        if ($request->image) {
           $ins = new Service; 
           $image = $request->image;
           $filename = time() . '-' . rand(1000, 9999) . '.' . $image->getClientOriginalExtension();
            //real image
            $image->move("storage/app/public/service",$filename);    
            $ins->image = $filename;
            $ins->name = $request->name;
            // $ins->plot = $request->plot;
            $ins->save();
        }
        return redirect()->back()->with('success','Image Saved Successfully');
    }

    public function delete($id)
    {
        $check = Service::where('id',$id)->first();
        @unlink('storage/app/public/service/'.$check->image);
        Service::where('id',$id)->delete();
        return redirect()->back()->with('success','Image Deleted Successfully');
    }
}
