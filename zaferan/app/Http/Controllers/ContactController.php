<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function sendComment(Request $request){
        try {
        $contact = new Contact;
        $contact->message = $request->message;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->save();
        return redirect()->back()->with('success', 'پیام شما ثبت شد . با تشکر از تماس شما');  
    }
    catch(\Exception $e){
        return redirect()->back()->with('error', 'متاسفانه خطایی در ثبت تماس رخ داد . سعی کنید تمام فیلدهارا تکمیل و مجددا تلاش کنید.');  
    }
    }
    public function showcontacts(){
        $allcontact = Contact::all();
        return view ('admin.contacts')-> with("contact",$allcontact);
    }
}
