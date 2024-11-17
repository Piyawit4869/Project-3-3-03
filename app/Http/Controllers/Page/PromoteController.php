<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\Promotion;
use Illuminate\Support\Str;
use File;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

class PromoteController extends Controller
{
    public function promote() {
        return view('page.promote');
    }

    public function index() {
        $promotion = Promotion::all() ;
        return view('backend.promote.index',compact('promotion'));
    }

    public function create(){
        return view('backend.promote.create');
    }

    public function insert(Request $request){

        //ป้องกันการกรอกข้อมูลผ่านForm
        $validated = $request->validate([
            'name' => 'required|max:255',
            'duration' => 'required|max:255',
            'festival' => 'required|max:255',
            'description' => 'required',
            'image' => 'mimes:jpg,jpeg,png',
        ],
        [
            'name.required' => 'กรุณากรอกข้อมูลโปรโมชั่น',
            'name.max' => 'กรอกข้อมูลได้ 255 ตัวอักษร',
            'duration.required' => 'กรุณากรอกข้อมูลระยะเวลาโปรโมชั่น',
            'duration.max' => 'กรอกข้อมูลได้ 255 ตัวอักษร',
            'festival.required' => 'กรุณากรอกข้อมูลเทศกาล',
            'festival.max' => 'กรอกข้อมูลได้ 255 ตัวอักษร',
            'description.required' => 'กรุณากรอกข้อมูลรายละเอียดสินค้า',
            'image.mimes' => 'อัพโหลดภาพที่มีนามสกุล .jpg .jpeg .png ได้เท่านั้น',
        ]);

        $prom = new Promotion();
        $prom->name = $request->name;
        $prom->duration = $request->duration;
        $prom->festival = $request->festival;
        $prom->description = $request->description;
        if($request->hasFile('image')){
            $filename = Str::random(10).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/backend/promotion/', $filename);
            Image::make(public_path().'/backend/promotion/'.$filename)->resize(80,80)->save(public_path().'/backend/promotion/resize/'.$filename);
            $prom->image = $filename;
        }else{
            $prom->image = 'no_image.jpg';
        }
        $prom->save();
        alert()->success('ใส่รูปภาพสำเร็จ','รูปภาพนี้ถูกเพิ่มแล้ว');
        return redirect('admin/promote/index');
    }

    public function edit($promotion_id){
        $prom = Promotion::find($promotion_id);
        return view('backend.promote.edit',compact('prom'));
    }

    public function update(Request $request, $promotion_id){
         //ป้องกันการกรอกข้อมูลผ่านForm
         $validated = $request->validate([
            'name' => 'required|max:255',
            'duration' => 'required|max:255',
            'festival' => 'required|max:255',
            'description' => 'required',
            'image' => 'mimes:jpg,jpeg,png',
        ],
        [
            'name.required' => 'กรุณากรอกข้อมูลโปรโมชั่น',
            'name.max' => 'กรอกข้อมูลได้ 255 ตัวอักษร',
            'duration.required' => 'กรุณากรอกข้อมูลระยะเวลาโปรโมชั่น',
            'duration.max' => 'กรอกข้อมูลได้ 255 ตัวอักษร',
            'festival.required' => 'กรุณากรอกข้อมูลเทศกาล',
            'festival.max' => 'กรอกข้อมูลได้ 255 ตัวอักษร',
            'description.required' => 'กรุณากรอกข้อมูลรายละเอียดสินค้า',
            'image.mimes' => 'อัพโหลดภาพที่มีนามสกุล .jpg .jpeg .png ได้เท่านั้น',
        ]);

        $prom = Promotion::find($promotion_id);
        $prom->name = $request->name;
        $prom->duration = $request->duration;
        $prom->festival = $request->festival;
        $prom->description = $request->description;
        if($request->hasFile('image')){

            if($prom->image != 'no_image.jpg'){
                File::delete(public_path().'/backend/promotion/'. $prom->image);
                File::delete(public_path().'/backend/promotion/resize/'. $prom->image);
            }

            $filename = Str::random(10).'.'.$request->file('image')->getClientOriginalExtension();

            $request->file('image')->move(public_path().'/backend/promotion/', $filename);

            Image::make(public_path().'/backend/promotion/'.$filename)->resize(80,80)->save(public_path().'/backend/promotion/resize/'.$filename);

            $prom->image = $filename;
        }
        $prom->update();
        alert()->success('แก้ไขรูปภาพสำเร็จ','รูปภาพนี้ถูกอัพเดทแล้ว');
        return redirect('admin/promote/index');
    }

    public function delete($promotion_id){
        $prom = Promotion::find($promotion_id);
        if($prom->image != 'no_image.jpg'){
            File::delete(public_path().'/backend/promotion/'. $prom->image);
            File::delete(public_path().'/backend/promotion/resize/'. $prom->image);
        }
        $prom->delete();
        alert()->success('ลบรูปภาพสำเร็จ','รูปภาพนี้ถูกลบแล้ว');
        return redirect('admin/promote/index');
    }
}
