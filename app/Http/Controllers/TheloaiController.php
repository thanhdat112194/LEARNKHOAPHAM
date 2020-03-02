<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\theloai;
//su dung ham trong the loai phai khai bao App\theloai
class TheloaiController extends Controller
{
 public function getDanhsach(){
     $theloai = theloai::all();
     //lay tat ca cac gia tir the loai
     return view('admin.theloai.danhsach',['theloai1'=>$theloai]);
     //lay gia tri theloai1 tu` $theloai
 }
//  public function getthem(){
//  return view('admin.theloai.them');
//  }
 public function test(Request $request){
    $this->validate($request,[
        'Ten'=>'required|mix:3|max:100'
    ],
    [
        'Ten.required'=>''
    ]);
 }
// public function postem(){
//     return view('admin.theloai.them');
//     }
public function xem(){
    return view('admin.theloai.them');
}

}