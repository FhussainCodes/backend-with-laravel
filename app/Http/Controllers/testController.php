<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

class testController extends Controller
{
   public function test(){
       return view ('test');
    }


}
