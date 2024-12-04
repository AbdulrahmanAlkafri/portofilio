<?php

namespace App\Http\Controllers;

use App\Models\Contact;  
use Illuminate\Http\Request;  
use Illuminate\Support\Facades\Validator;
class ContactController extends Controller
{
    public function store(Request $request)  
    {  
        $validator = Validator::make($request->all(), [  
            'name' => 'required|string|max:255',  
            'phone_number' => 'required|string|max:15',  
            'email' => 'required|email|max:255',  
            'subject' => 'required|string|max:1000',
        ]);  

        if ($validator->fails()) {  
            return redirect()->back()->withErrors($validator)->withInput();  
        }  

        Contact::create([  
            'name' => $request->name,  
            'phone_number' => $request->phone_number,  
            'email' => $request->email,  
            'subject' => $request->subject,  
        ]);  

        return redirect()->back()->with('success', 'تم ارسال الرسالة بنجاح!');  
    }  
}