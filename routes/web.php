<?php

use App\Http\Controllers\PostController;
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

    return view('dashboard', ['user' => $authUser]);
})->middleware(['auth:web'])->name('dashboard');

require __DIR__.'/auth.php';


//route to create a post

Route::get("/posts/create", [PostController::class, 'create'])
->name("posts.create");


Route::post("/posts/store",  [PostController::class, 'store'])
->name("posts.store");

