<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{


    public function sayHi() {

        $name = "Abdullahi Usman Faruk";
        //return view("sayhi", ["name" => $name]);



        $users = [
            [
                "fullname" => "Rabiu Bako",
                "age" => 50
            ],
            [
                "fullname" => "Aniwa M Lawan",
                "age" => 23
            ],
            [
                "fullname" => "Hashim Ahmad",
                "age" => 20
            ]
        ];


        return view("sayhi", compact("name", "users") );
     }
}

