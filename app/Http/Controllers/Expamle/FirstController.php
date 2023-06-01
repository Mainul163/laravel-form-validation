<?php

namespace App\Http\Controllers\Expamle;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FirstController extends Controller
{
    //

    public function index(Request $request){


        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:55',
            'password' => 'required|min:6|max:12'
           
        ]);

       dd($request->all());

    //   return view('result');
    }
}