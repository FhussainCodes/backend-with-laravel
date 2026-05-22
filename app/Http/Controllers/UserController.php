<?php
namespace App\Http\Controllers;
// use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user_Data($name, $id){
        return "My name is " . $name . " and my ID is ". $id;
    }
}
