<?php  

namespace App\Http\Controllers;  

use App\Models\Questionair;  
use Illuminate\Http\Request;  

class QuestionairController extends Controller  
{  
    public function store(Request $request)  
    {  
        // Validate the incoming request data  
        $validatedData = $request->validate([  
            'name' => 'required|string|max:255',  
            'phone' => 'required|string|max:20', // Adjust max length as needed  
            'country' => 'required|string|max:255',  
            'trademark_name' => 'required|string|max:255',  
            'trademark_type' => 'required|string|max:255',  
            'notes' => 'nullable|string|max:1000', // Adjust max length as needed  
        ]);  

        // Create a new Questionair instance and save to the database  
        Questionair::create([  
            'name' => $validatedData['name'],  
            'phone_number' => $validatedData['phone'],  
            'country' => $validatedData['country'],  
            'trademark_name' => $validatedData['trademark_name'],  
            'trademark_type' => $validatedData['trademark_type'],  
            'notes' => $validatedData['notes'],  
        ]);  

        // Redirect back with a success message  
        return redirect()->back()->with('success', 'تم التسجيل بنجاح!');  
    }  
}