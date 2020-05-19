<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
// use App\User;

class display extends Controller
{
    public function index(){

        return view("index");

    }

    public function displaycontact(){

        return view("contact");
        
    }

    public function displaywelcome(){
        
    	return view("welcome");
    }
}
