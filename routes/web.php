<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
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


Route::get('/home', function () {
    return view('home');
})->name('home');
Route::get('/aboutMe', function () {
    return view('aboutMe');
})->name('aboutMe');
Route::get('/contactMe', function () {
    return view('contactMe');
})->name('contactMe');
Route::get('/post/create', function () {
    DB::table('post')->insert([
      'title' => 'Globalisation',
      'body' => 'Globalisation is the process of interaction and integration among people, companies, and governments worldwide.'
    ]);
  });
    Route::get('/post', function () {
        $post = Post::find(1);
        return $post;
});
