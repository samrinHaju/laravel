<?php

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

Route::view('/', 'home')->name('home');
Route::view('/contact','contact')->name('contact');
Route::get('/blog-post/{id}/{welcome?}',function($id,$welcome = 2){
    $pages = [
        1 => [
            'title' => 'to page 1',
        ],
        2 => [
            'title' => '<h1>to page 2</h1>',
        ],
    ];
    $welcomes = [
        1=>'<h1>Hello </h1>',
        2=>'<h1>welcome </h1>'
    ];
    return view('blog_post',[
        'data' => $pages[$id],
        'welcome' => $welcomes[$welcome]
        ]);
})->name('blog-post');