<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Support\Str;
use File;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function gallery() {
        return view('page.gallery');
    }

    public function index() {
        $gallery = Gallery::all() ;
        return view('backend.gallery.index',compact('gallery'));
    }

    public function create(){
        return view('backend.gallery.create');
    }

    public function insert(Request $request){

        //ป้องกันการกรอกข้อมูลผ่านForm
        $validated = $request->validate([
            'name' => 'required|max:255',
            'image' => 'mimes:jpg,jpeg,png',
        ],
        [
            'name.required' => 'กรุณใส่รูปภาพ',
            'image.mimes' => 'อัพโหลดภาพที่มีนามสกุล .jpg .jpeg .png ได้เท่านั้น',
        ]);

        $gall = new Gallery();
        $gall->name = $request->name;
        if($request->hasFile('image')){
            $filename = Str::random(10).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/backend/gallery/', $filename);
            Image::make(public_path().'/backend/gallery/'.$filename)->resize(80,80)->save(public_path().'/backend/gallery/resize/'.$filename);
            $gall->image = $filename;
        }else{
            $gall->image = 'no_image.jpg';
        }
        $gall->save();
        alert()->success('ใส่รูปภาพสำเร็จ','รูปภาพนี้ถูกเพิ่มแล้ว');
        return redirect('admin/gallery/index');
    }

    public function edit($gallery_id){
        $gall = Gallery::find($gallery_id);
        return view('backend.gallery.edit',compact('gall'));
    }

    public function update(Request $request, $gallery_id){
         //ป้องกันการกรอกข้อมูลผ่านForm
         $validated = $request->validate([
            'name' => 'required|max:255',
            'image' => 'mimes:jpg,jpeg,png',
        ],
        [
            'name.required' => 'กรุณใส่รูปภาพ',
            'image.mimes' => 'อัพโหลดภาพที่มีนามสกุล .jpg .jpeg .png ได้เท่านั้น',
        ]);

        $gall = Gallery::find($gallery_id);
        $gall->name = $request->name;
        if($request->hasFile('image')){

            if($gall->image != 'no_image.jpg'){
                File::delete(public_path().'/backend/gallery/'. $gall->image);
                File::delete(public_path().'/backend/gallery/resize/'. $gall->image);
            }

            $filename = Str::random(10).'.'.$request->file('image')->getClientOriginalExtension();

            $request->file('image')->move(public_path().'/backend/gallery/', $filename);

            Image::make(public_path().'/backend/gallery/'.$filename)->resize(80,80)->save(public_path().'/backend/gallery/resize/'.$filename);

            $gall->image = $filename;
        }
        $gall->update();
        alert()->success('แก้ไขรูปภาพสำเร็จ','รูปภาพนี้ถูกอัพเดทแล้ว');
        return redirect('admin/gallery/index');
    }

    public function delete($gallery_id){
        $gall = Gallery::find($gallery_id);
        if($gall->image != 'no_image.jpg'){
            File::delete(public_path().'/backend/gallery/'. $gall->image);
            File::delete(public_path().'/backend/gallery/resize/'. $gall->image);
        }
        $gall->delete();
        alert()->success('ลบรูปภาพสำเร็จ','รูปภาพนี้ถูกลบแล้ว');
        return redirect('admin/gallery/index');
    }
}
