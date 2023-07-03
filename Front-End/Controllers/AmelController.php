<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AmelController extends Controller
{
    public function homepage(){
        return view('modules.home');
    }
    function about() {
        return view('modules.about');
    }
    function admin(){
        return view('modules.adminpage');
    }
    function contact(){
        return view('modules.contact');
    }
    function menust(){
        return view('modules.menust');
    }
}
