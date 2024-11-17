<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact() {
        return view('page.contact');
    }

    public function index() {
        $contact = Contact::all() ;
        return view('backend.contact.index',compact('contact'));
    }

    public function insert(Request $request){

        //ทำการป้องกันการกรอกข้อมูลผ่านฟอร์ม
        $validated = $request->validate([
            'name' => 'required|max:255',
            'subject' => 'required|max:255',
            'message' => 'required',
        ],);

        //การบันทึกข้อมูลลงในฐานข้อมูล
        //dd($request->name);
        $con = new Contact();
        $con->name = $request->name;
        $con->subject = $request->subject;
        $con->message = $request->message;
        $con->save();
        alert()->success('บันทึกข้อมูลสำเร็จ','ข้อมูลการติดต่อของคุณถูกส่งให้ร้านแล้ว');
        return redirect()->route('page.contact');
    }
}
