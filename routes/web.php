<?php

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
    //return view('welcome');



    $post = \App\Post::find(1);
    echo $post->id.'   '.$post->title.'<br><hr>';
    foreach($post->comments as $comment) {
        echo '*'.$comment->content.'<br>';
    }






});
