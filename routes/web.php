<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Http\Controllers\BlogController;



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
  Route::get('post', function () {
    $posts = Post::find(1);
    return $posts;
});
Route::get('blog/index', [BlogController::class, 'index']);
Route::get('blog/create', function(){
  return view('create');
});
Route::post('blog/create', [BlogController::class,'store'])->name('add-post');

Route::get('blog/{id}', [BlogController::class,'get_blog']);