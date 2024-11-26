<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogImages;
class BlogController extends Controller
{
    public function index()
    {
        $data = [];
        $data['data'] = Blog::get();
        return view('blog.index',$data);
    }

    public function add()
    {
        return view('blog.add');
    }

    public function insert(Request $request)
    {
        $new = new Blog;
        $new->title = $request->title;
        $new->description = $request->description;
        $new->type_post = $request->type_post;
        $new->paste_link = $request->paste_link;

        $new->youtube_link = $request->youtube_link;

        if(@$request->youtube_link!="")
        {
           $url= $request->youtube_link;
           parse_str( parse_url( $url, PHP_URL_QUERY ), $my_array_of_vars );
           $new->youtube_code =  $my_array_of_vars['v'];
        }



        if ($request->image) {
           $image = $request->image;
           $filename = time() . '-' . rand(1000, 9999) . '.' . $image->getClientOriginalExtension();
            //real image
            $image->move("storage/app/public/blog",$filename);    
            $new->image = $filename;
        }

        $new->save();
        return redirect()->route('manage.blog')->with('success','Data Saved Successfully');
    }

    public function edit($id)
    {
        $data = [];
        $data['data'] = Blog::where('id',$id)->first();
        return view('blog.edit',$data);
    }

    public function update(Request $request)
     {
        $check = Blog::where('id',$request->id)->first();
        @unlink('storage/app/public/blog/'.$check->image);
        $upd = [];
        $upd['title'] = $request->title;
        $upd['description'] = $request->description;
        $upd['type_post'] = $request->type_post;
        $upd['paste_link'] = $request->paste_link;
        $upd['youtube_link'] = $request->youtube_link;
        if(@$request->youtube_link!="")
        {
           $url= $request->youtube_link;
           parse_str( parse_url( $url, PHP_URL_QUERY ), $my_array_of_vars );
           $upd['youtube_code'] =  $my_array_of_vars['v'];
        }
        if ($request->image) {
           $image = $request->image;
           $filename = time() . '-' . rand(1000, 9999) . '.' . $image->getClientOriginalExtension();
            //real image
            $image->move("storage/app/public/blog",$filename);    
            $upd['image'] = $filename;
        }

        Blog::where('id',$request->id)->update($upd);
        return redirect()->back()->with('success','Data Updated Successfully');

     }

     public function delete($id)
     {
        $check = Blog::where('id',$id)->first();
        @unlink('storage/app/public/blog/'.$check->image);
        Blog::where('id',$id)->delete();
        return redirect()->back()->with('success','Data Deleted Successfully');
     }


     public function images($id)
     {
        $data = [];
        $data['data'] = BlogImages::where('blog_id',$id)->get();
        $data['id'] = $id;
        return view('blog.gallery',$data);
     }


     public function upload(Request $request)
     {
        if ($request->image) {
           $ins = new BlogImages; 
           $image = $request->image;
           $filename = time() . '-' . rand(1000, 9999) . '.' . $image->getClientOriginalExtension();
            //real image
            $image->move("storage/app/public/gallery",$filename);    
            $ins->image = $filename;
            $ins->blog_id = $request->id;
            $ins->save();
        }
        return redirect()->back()->with('success','Image Saved Successfully');
     }


     public function deleteImages($id)
     {
        $check = BlogImages::where('id',$id)->first();
        @unlink('storage/app/public/gallery/'.$check->image);
        BlogImages::where('id',$id)->delete();
        return redirect()->back()->with('success','Image Deleted Successfully');
     }




}
