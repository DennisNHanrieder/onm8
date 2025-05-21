<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormController extends Controller
{
     public function show()
    {
        return view('form');
    }

   public function submit(Request $request)
{
    $validated = $request->validate([
        'firstname' => 'required|string|min:2|max:50',
        'lastname' => 'required|string|min:2|max:50',
        'email' => 'required|email|max:255',
        'newsletter' => 'nullable|boolean',
    ]);

    return back()->with('success', 'Form submitted!')->with('data', $validated);
}

}
