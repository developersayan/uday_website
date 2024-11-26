<?php

namespace App\Http\Controllers\Package;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\PackageToGallery;
class PackageController extends Controller
{
    public function index()
    {
        $data = [];
        $data['data'] = Package::where('status','!=','D')->get();
        return view('package.index',$data);
    }

    public function add()
    {
        return view('package.add');
    }

    public function insert(Request $request)
    {
        $new = new Package;
        $new->title = $request->title;
        $new->description = $request->description;
        $new->plot = $request->plot;
        $new->price = $request->price;
        if ($request->image) {
           $image = $request->image;
           $filename = time() . '-' . rand(1000, 9999) . '.' . $image->getClientOriginalExtension();
            //real image
            $image->move("storage/app/public/package",$filename);    
            $new->image = $filename;
        }
        $new->save();
        return redirect()->route('manage.package')->with('success','Package Added Successfully');
    }

    public function edit($id)
    {
        $data = [];
        $data['data'] = Package::where('id',$id)->first();
        return view('package.edit',$data);
    }

    public function update(Request $request)
    {
        $upd = [];
        $upd['title'] = $request->title;
        $upd['plot'] = $request->plot;
        $upd['price'] = $request->price;
        $upd['description'] = $request->description;
        if ($request->image) {
           $image = $request->image;
           $filename = time() . '-' . rand(1000, 9999) . '.' . $image->getClientOriginalExtension();
            //real image
            $image->move("storage/app/public/package",$filename);    
            $upd['image'] = $filename;
        }

        Package::where('id',$request->id)->update($upd);
        return redirect()->back()->with('success','Data Updated Successfully');
    }

     public function delete($id)
     {
        Package::where('id',$id)->update(['status'=>'D']);
        return redirect()->back()->with('success','Data Deleted Successfully');
     }

     public function gallery($id)
     {
        $data = [];
        $data['id'] = $id;
        $data['data'] = PackageToGallery::where('package_id',$id)->get();
        return view('package.gallery',$data);
     }

     public function galleryInsert(Request $request)
     {
        if ($request->image) {
           $ins = new PackageToGallery; 
           $image = $request->image;
           $filename = time() . '-' . rand(1000, 9999) . '.' . $image->getClientOriginalExtension();
            //real image
            $image->move("storage/app/public/gallery",$filename);    
            $ins->image = $filename;
            $ins->package_id = $request->id;
            $ins->save();
        }
        return redirect()->back()->with('success','Image Saved Successfully');
     }

     public function galleryDelete($id)
     {
        $check = PackageToGallery::where('id',$id)->first();
        @unlink('storage/app/public/gallery/'.$check->image);
        PackageToGallery::where('id',$id)->delete();
        return redirect()->back()->with('success','Image Deleted Successfully');
     }

     public function show($id)
     {
        $check = Package::where('id',$id)->first();
        if (@$check->show_at_home=="Y") {
            Package::where('id',$id)->update(['show_at_home'=>'N']);
        }else{
            Package::where('id',$id)->update(['show_at_home'=>'Y']);
        }
        return redirect()->back()->with('success','Data Status Changed Successfully');
     }
}
