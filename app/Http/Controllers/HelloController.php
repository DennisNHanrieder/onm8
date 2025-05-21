<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function hello(string $name = "World")
    {
        //return response("Hello ".$name);
        return view('hello', ['name' => $name]);
    }
}
