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

//dd(resolve('App\Billing\Stripe'));
Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{task}', 'TasksController@show');
Route::get('/', 'PostsController@index');
Route::get('/posts/{post}', 'PostsController@show');
Route::get('/blog', 'PostsController@blog')->name('home');
Route::get('/blog/create', 'PostsController@create');
Route::post('/blog', 'PostsController@store');


Route::get('/posts/tags/{tag}','TagsController@index');

Route::post('/posts/{post}/comments', 'CommentsController@store');

Route::post('/login', 'SessionsController@store');
Route::get('/login', 'SessionsController@create')->name('login');
Route::get('/logout', 'SessionsController@destroy');
Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/about', function ()
{
    return view('about');
});
