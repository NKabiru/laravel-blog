<?php

use App\Task;
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

Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{task}', 'TasksController@show');

Route::get('/', 'PostController@index')->name('home');
Route::get('/posts/create', function () {
    return auth()->check() ?
        View::make('posts.create') : View::make('sessions.create');
} );
Route::get('/posts/{post}', 'PostController@show');
Route::post('/posts', 'PostController@store');

Route::get('/posts/tags/{tag}', 'TagController@index');

Route::post('/posts/{post}/comments', 'CommentController@store');

Route::get('/login', 'SessionController@create');
Route::get('/logout', 'SessionController@destroy');
Route::post('/login', 'SessionController@store');


Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('about', function () {
    return view('about');
});

