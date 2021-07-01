<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function Page1(){
        return view('Page1');
    }
    public function Page2(){
        return view('Page2');
    }
    public function Page3(){
        return view('Page3');
    }
}
