<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //


    public function create() {

        return view("posts.create"); //resources/views/posts/create.blade.php
    }


    public function store(Request $request) {

        //get the request body
     //   dd($request->get("body"));
        //save the post

        //crook way of getting na dsaving data from the request. bcos we're assuming the request will always have title and body
   /*   $newPost =   Post::create([
            "title" => $request->get("title"),
            "body" => $request -> get("body")
        ]);
*/

        $validatedData = $request->validate([
            "title" => "required|min:3|max:255",
            "body" => "required|max:255"
        ]);


        Post::create($validatedData);
 
        return redirect(route("dashboard"));
    }
}
