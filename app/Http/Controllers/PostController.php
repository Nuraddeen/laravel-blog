<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware("auth")->except(["list", "", ""]);
       // $this->middleware("auth")->only(["method1", "method2"]);
    }


    public function list() {

        dd("this method is exempted from being authenticated");
    }

    public function create()
    {

        return view("posts.create"); //resources/views/posts/create.blade.php
    }


    public function store(Request $request)
    {

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

        //associative array (key/value pairs)
        $validatedData['user_id'] = auth()->user()->id;
        //  "user_id" => auth()->user()->id// Auth::user()->id

        Post::create($validatedData);

        //pass success msg to the session

        session()->flash("success_message", "The post has been created successfully");
        // session()->flash("error_message", "We can not create your post at the moment, pls try again later thank you for banking with us");

        //  return redirect("/register")->back();
        return redirect(route("dashboard"));
    }
}
