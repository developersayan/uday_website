<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\User;
use DB;
class ContactController extends Controller
{
    public function index()
    {
        $data = [];
        $data['data'] = Contact::get();
        return view('contact.index',$data);
    }

    public function delete($id)
    {
        Contact::where('id',$id)->delete();
        return redirect()->back()->with('success','Data Deleted Successfully');
    }

    public function view($id)
    {
        $data = [];
        $data['data'] = Contact::where('id',$id)->first();
        return view('contact.view',$data);
    }

    public function change()
    {
        return view('change_password');
    }

    public function changePassword(Request $request)
    {
        // checking old password matched or not 
        $oldpassword = $request->input('oldpassword');
        if (!\Hash::check($oldpassword,auth()->user()->password)) {
            return redirect()->back()->with('error','You have entered wrong old password');
        }
        
        $updatepassword = User::where('id',auth()->user()->id)->update([
        'password'=>\Hash::make($request->input('password'))
        ]);
        return redirect()->back()->with('success','Password updated successfully');
    }

    public function tariff()
    {
        $data = [];
        $data['data'] = DB::table('tariff')->where('id',1)->first();
        return view('contact.tariff',$data);
    }

    public function tariffInsert(Request $request)
    {
        $upd = [];
        
        DB::table('tariff')->where('id',1)->update([
            'dawaipani'=>$request->dawaipani,
            'sourinee'=>$request->sourinee,
        ]);
        return redirect()->back()->with('success','Data Saved Successfully');
    }
}

