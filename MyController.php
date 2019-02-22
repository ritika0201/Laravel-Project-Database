<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //
    public function f1()
    {
    	$var=["INT221","Laravel","2 hr","2500"];
    	return view('ritika', compact('var'));
    }
}
