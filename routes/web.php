<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongsController;


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



Route::get('/registration', [App\Http\Controllers\RegistrationController::class, 'index'])->name('/registration');


 Route::get('user/create', [App\Http\Controllers\RegistrationController::class, 'create'])->name('user.create');



/*Route::post('songs', [
    'uses' => 'SongsController@store',
    'as' => 'song.store'
]);*/


/*Route::get('songs/create', [
    'uses' => 'SongsController@create',
    'as' => 'song.create'
]);*/
