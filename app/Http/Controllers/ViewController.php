<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    function showets(){
        return view('ets');
    }

    function showphp(){
        return view('tugasphp');
    }

    function resultphp(){
        return view('hitungphp');
    }

    function showForm(){
        return view('showgreetings');
    }

    function resultGreetings(){
        return view('tugas');
    }
}
