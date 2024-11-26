<?php

namespace App\Http\Controllers\Testimonial;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Models\Member;
class TestimonialController extends Controller
{
     public function index()
     {
        $data = [];
        $data['data'] = Testimonial::get();
        return view('testimonial.index',$data);
     }

     public function add()
     {
        return view('testimonial.add');
     }

     public function insert(Request $request)
     {
        $new = new Testimonial;
        $new->name = $request->name;
        $new->profession = $request->profession;
        $new->description = $request->description;
        if ($request->image) {
           $image = $request->image;
           $filename = time() . '-' . rand(1000, 9999) . '.' . $image->getClientOriginalExtension();
            //real image
            $image->move("storage/app/public/testimonial",$filename);    
            $new->image = $filename;
        }

        $new->save();
        return redirect()->route('manage.testimonial')->with('success','Data Saved Successfully');
     }

     public function edit($id)
     {
        $data = [];
        $data['data'] = Testimonial::where('id',$id)->first();
        return view('testimonial.edit',$data);
     }

     public function update(Request $request)
     {
        $upd = [];
        $upd['name'] = $request->name;
        $upd['profession'] = $request->profession;
        $upd['description'] = $request->description;
        if ($request->image) {
           $image = $request->image;
           $filename = time() . '-' . rand(1000, 9999) . '.' . $image->getClientOriginalExtension();
            //real image
            $image->move("storage/app/public/testimonial",$filename);    
            $upd['image'] = $filename;
        }

        Testimonial::where('id',$request->id)->update($upd);
        return redirect()->back()->with('success','Data Updated Successfully');

     }

     public function delete($id)
     {
        Testimonial::where('id',$id)->delete();
        return redirect()->back()->with('success','Data Deleted Successfully');
     }

     public function memberIndex()
     {
        $data= [];
        $data['data'] = Member::get();
        return view('member.index',$data);
     }

     public function memberAdd()
     {
      return view('member.add');
     }

     public function memberInsert(Request $request)
     {
        $new = new Member;
        $new->name = $request->name;
        $new->designation = $request->designation;
        $new->year = $request->year;
        if ($request->image) {
           $image = $request->image;
           $filename = time() . '-' . rand(1000, 9999) . '.' . $image->getClientOriginalExtension();
            //real image
            $image->move("storage/app/public/testimonial",$filename);    
            $new->image = $filename;
        }

        $new->save();
        return redirect()->route('member.management')->with('success','Data Saved Successfully');
     }

     public function memberedit($id)
     {
         $data = [];
         $data['data'] = Member::where('id',$id)->first();
         return view('member.edit',$data);
     }

     public function memberupdate(Request $request)
     {
        $upd = [];
        $upd['name'] = $request->name;
        $upd['designation'] = $request->designation;
        $upd['year'] = $request->year;
        if ($request->image) {
           $image = $request->image;
           $filename = time() . '-' . rand(1000, 9999) . '.' . $image->getClientOriginalExtension();
            //real image
            $image->move("storage/app/public/testimonial",$filename);    
            $upd['image'] = $filename;
        }

        Member::where('id',$request->id)->update($upd);
        return redirect()->back()->with('success','Data Updated Successfully');
     }

     public function memberdelete($id)
     {
         Member::where('id',$id)->delete();
         return redirect()->back()->with('success','Data Deleted Successfully');
     }
}
