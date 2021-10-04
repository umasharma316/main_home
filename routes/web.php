<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
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
Route::get('/carousel', function () {
    return view('carousel');
})->name('carousel');

Route::get('/', function () {
    return view('home');
});

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/team', function () {
    return view('team');
})->name('team');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/elsi', [Home\HomeController::class, 'elsiFamily'])->name('elsiFamily');

Route::get('/country', [Home\HomeController::class, 'country'])->name('country');
Route::post('/getstates', [Home\HomeController::class, 'getState'])->name('getstates');
Route::post('/elsi_colleges', [Home\HomeController::class, 'geteLSIColleges'])->name('elsiColleges');

Route::get('/eyrc', [Home\HomeController::class, 'eyrc'])->name('eyrc');
Route::post('/stats_yearwise', [Home\HomeController::class, 'stats_yearwise'])->name('stats_yearwise');


Route::get('/publications', [Home\HomeController::class, 'publications'])->name('publications');

Route::get('/efsi', function () {
    return view('efsi');
})->name('efsi');

Route::get('/eysrc', function () {
    return view('eysrc');
})->name('eysrc');

Route::get('/eyic', function () {
    return view('eyic');
})->name('eyic');

Route::get('/eyrdc', function () {
    return view('eyrdc');
})->name('eyrdc');


    //get log info
Route::prefix('admin')->group(function () {
Route::get('downloadLogFile', 'LogController@downloadLogFile');
Route::get('viewLogFile', 'LogController@viewLogFile');
Route::get('eraseLogFile', 'LogController@eraseLogFile');
});

Route::get('/log/downloadLogFile/{year}/{month}/{date}', 'LogController@downloadLogFile');
Route::get('/log/viewLogFile/{year}/{month}/{date}', 'LogController@viewLogFile');
Route::get('/log/eraseLogFile/{year}/{month}/{date}', 'LogController@eraseLogFile');
