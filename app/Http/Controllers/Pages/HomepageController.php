<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Package;
use App\Models\PackageToGallery;
use App\Models\Gallery;
use App\Models\Testimonial;
use App\Models\BlogImages;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Member;
use Mail;
use App\Mail\ContactMail;
use App\Models\RoomPrice;
use App\Models\Service;
use DB;
class HomepageController extends Controller
{
    

    public function index()
    {
        $data = [];
        $data['banner'] = Banner::orderBy('id','desc')->get();
        $data['gallery'] = Gallery::get();
        $data['testimonial'] = Testimonial::get();
        $data['blogs'] = Blog::orderBy('id','desc')->where('type_post','Blog')->limit(10)->get();
        $data['services'] = Blog::orderBy('id','asc')->where('type_post','Services')->get();
        return view('welcome',$data);
    }

    public function contactPost(Request $request)
    {
        $contact  = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->message = $request->message;
        $contact->save();

        
        $data = [
                'name'=>$request->name,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'message'=>$request->message,
                ];
        Mail::send(new ContactMail($data));
        return redirect()->back()->with('success','Thank you for verifying your message.We will contact you soon.');
    }

    public function members()
    {
        $data = [];
        $data['member'] = Member::orderBy('id','desc')->get();
        return view('members',$data);
    }



    

    public function gallery()
    {
        $data = [];
        $data['gallery'] = Gallery::get();
        
        return view('gallery',$data);
    }

    public function blog()
    {
        $data = [];
        $data['blog'] = Blog::orderBy('id','desc')->where('type_post','Blogs')->get();
        return view('blog',$data);
    }

    public function contact()
    {
        return view('contact');
    }

    public function package_details($id)
    {
        $data = [];
        $data['data'] = Package::where('id',$id)->first();
        $data['gallery'] = PackageToGallery::where('package_id',$id)->get();
        return view('package_details',$data);
    }

    public function packageEnquiry(Request $request)
    {
        $contact  = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->message = $request->message;
        $contact->package_id = $request->package_id;
        $contact->save();

        $package_details = Package::where('id',$request->package_id)->first();
        
        $data = [
                'name'=>$request->name,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'message'=>$request->message,
                'package'=>$package_details,
                ];
        Mail::send(new ContactMail($data));
        return redirect()->back()->with('success','Thank you for sending us message .We will contact you soon.');
    }

    public function blog_details($id)
    {
        $data = [];
        $data['data'] = Blog::where('id',$id)->first();
        $data['gallery'] = BlogImages::where('blog_id',$id)->get();
        return view('blog_details',$data);
    }

    public function notification()
    {
        $data = [];
        $data['notification'] = Blog::orderBy('id','desc')->where('type_post','Notification')->get();
        return view('notification',$data);
    }

    public function whats()
    {
        $data = [];
        $data['news'] = Blog::orderBy('id','desc')->where('type_post','News')->get();
        return view('news',$data);
    }

    public function events()
    {
        $data = [];
        $data['events'] = Blog::orderBy('id','desc')->where('type_post','Event')->get();
        return view('event',$data);
    }

    public function aboutUs()
    {
        $data = [];
        $data['testimonial'] = Testimonial::get();
        return view('about',$data);
    }

    public function services()
    {
        $data = [];
        $data['services'] = Blog::orderBy('id','asc')->where('type_post','Services')->get();
        return view('service',$data);
    }
}
