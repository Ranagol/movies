<?php
use App\Movie;

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

Route::get('/movies', 'MovieController@index');

Route::get('/movies/create', 'MovieController@create');

Route::get('/movies/{movie}', 'MovieController@show');

Route::post('/movies', 'MovieController@store');

Route::post('/movies/{movie}/comments', 'CommentController@store');

Route::get('/genres/{genre}', 'GenreController@show');

/*
dodati watched kolonu u movies. Ako je ovo true, ne sme da se pokazuje u index listi. Watched moze da se namesti u formi za slanje. Mora da se radi modifikacija table sa migracijom.



*/




