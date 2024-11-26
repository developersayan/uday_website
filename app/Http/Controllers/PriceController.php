<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoomPrice;
class PriceController extends Controller
{
    public function index()
    {
        $data = [];
        $data['dawaipani'] =  RoomPrice::where('id',1)->first();
        $data['sourinne'] =  RoomPrice::where('id',2)->first();
        return view('room_price',$data);
    }

    public function dawaipaniUpdate(Request $request)
    {
        RoomPrice::where('id',1)->update([
            'one_person'=>$request->one_person,
            'two_person'=>$request->two_person,
            'three_person'=>$request->three_person,
            'four_person'=>$request->four_person,
        ]);
        return redirect()->back()->with('success','Data Updated Successfully');
    }


    public function sourinneUpdate(Request $request)
    {
        RoomPrice::where('id',2)->update([
            'one_person'=>$request->one_person,
            'two_person'=>$request->two_person,
            'three_person'=>$request->three_person,
            'four_person'=>$request->four_person,
        ]);
        return redirect()->back()->with('success','Data Updated Successfully');
    }
}
