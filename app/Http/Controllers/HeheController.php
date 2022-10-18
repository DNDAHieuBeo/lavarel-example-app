<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeheController extends Controller
{
    public function getHello(){
        return view('hello');
    }
    public function getBt2(){
        return view('bt2');
    }
}
