<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class display extends Controller
{
    public function index(){
        // $a = new User;
        // $arr = [
        //     "name" => "Taiwo", "email" => "ameen@gmail.com", "password" => "3454412"
        // ];
        // $a->create($arr);
        // $a = new User;
        // User::create($arr);
        $a = User::all();
        // $a = User::where('name', 'Taiwo')->first();
        // return $a;

        return view('index')->with("values", $a);
    }

    public function displaycontact(){

    	$dbFetch = DB::table("s_users")->where("userNicename", "form one")->get();
        // $dbFetch = 'sadfsd';
    	if($dbFetch){

            // return view("contact", ["value" => $dbFetch]);
    		return view("contact")->with("values", $dbFetch);
    	}
    	return view("contact")->with("error", "Not found");
    }

    public function displaywelcome(){
    	return view("welcome");
    }
}
