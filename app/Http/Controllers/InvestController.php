<?php

namespace App\Http\Controllers;

use App\Models\Invest;
use Illuminate\Http\Request;

class InvestController extends Controller
{
    public function store(Request $request)  
    {  
        // Validate the incoming request data  
        $validatedData = $request->validate([  
            'name' => 'required|string|max:255',  
            'phone' => 'required|string|max:20', // Adjust max length as needed  
            'country' => 'required|string|max:255',  
            'company_name' => 'required|string|max:255',  
            'company_type' => 'required|string|max:255',  
            'message' => 'nullable|string|max:1000', // Adjust max length as needed  
        ]);  

        // Create a new Invest instance and save to the database  
        Invest::create([  
            'name' => $validatedData['name'],  
            'phone_number' => $validatedData['phone'],  
            'country' => $validatedData['country'],  
            'company_name' => $validatedData['company_name'],  
            'company_type' => $validatedData['company_type'],  
            'message' => $validatedData['message'],  
        ]);  

        // Redirect back with a success message  
        return redirect()->back()->with('success', 'تم التسجيل بنجاح!');  
    }  
}