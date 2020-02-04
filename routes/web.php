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








/* ovo vise ne treba, problem je resen a u GenreController
Route::get('/genres/{genre}', function ($genre) {
    $genreMovies = Movie::where('genre', $genre)->get();
    $last5movies = Movie::orderBy('created_at', 'desc')->take(5)->get();
    return view('movies.genre', compact('genreMovies', 'last5movies'));
});
*/
