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

Route::get('/', 'HomeController@index')->name('index');
Route::get('/posts', 'PostController@index')->name('guest.posts.index');
Route::get('/posts/{slug}', 'PostController@show')->name('guest.posts.show');
Route::get('/contatti', 'HomeController@contatti')->name('guest.contatti');
Route::post('/contatti', 'HomeController@contattato')->name('guest.contattato');
Route::get('/inviato', 'HomeController@confermato')->name('guest.inviato');






Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');



Route::prefix('admin')
->namespace('Admin')
->middleware('auth')
->group(function () {
Route::get('/', 'HomeController@index')->name('home');
Route::get('/tags', function () {
    // use App\Tag;

    $tags = Tag::all();
    $data = [
      'tags' => $tags
    ];

    return view('admin.post.tags', $data);
})->name('tags');
Route::resource('/post', 'PostController');

  });
