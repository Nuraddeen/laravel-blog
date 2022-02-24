<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () { 

    $authUser = auth()->user();//using auth() helper function
 //   $authUser = Auth::user();//

 //query.
 
    return view('dashboard', [
        'user' => $authUser,
       // 'posts' =>  $authUser->posts,
       //oldest is the opposite of latest
       // 'recentPosts' => Post::where("user_id", "=", $authUser->id)->latest()->take(3)->get(),
        'recentPosts' => Post::where("user_id", "=", $authUser->id)->latest()->paginate(3),
    ]);
})->middleware(['auth:web'])->name('dashboard');

require __DIR__.'/auth.php';


//route to create a post

Route::get("/posts/create", [PostController::class, 'create'])
->name("posts.create");
//->middleware("auth");


Route::post("/posts/store",  [PostController::class, 'store'])
->name("posts.store");

