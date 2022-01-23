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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



// Route::group(['middleware' => 'auth'], function() {
//   Route::get('/dashboard', function () {
//     return view('dashboard');
//   })->name('dashboard');
// });

// Rute list akun

// Route::get('/list','listAkun@index');

// coba

Route::namespace('App\Http\Controllers')->middleware('auth')->group(function () {
    Route::prefix('')->group(function () { //you can use prefix if you want
      Route::get('/list', 'listAkun@index');
    });
});

Route::namespace('App\Http\Controllers')->middleware('auth')->group(function () {
    Route::prefix('')->group(function () { //you can use prefix if you want
      Route::get('/list/add', 'listAkun@add');
    });
});

Route::namespace('App\Http\Controllers')->middleware('auth')->group(function () {
    Route::prefix('')->group(function () { //you can use prefix if you want
      Route::get('/list/store', 'listAkun@store');
    });
});

Route::namespace('App\Http\Controllers')->middleware('auth')->group(function () {
    Route::prefix('')->group(function () { //you can use prefix if you want
      Route::get('/list/edit/{id}', 'listAkun@edit');
    });
});

Route::namespace('App\Http\Controllers')->middleware('auth')->group(function () {
    Route::prefix('')->group(function () { //you can use prefix if you want
      Route::get('/list/update', 'listAkun@update');
    });
});

Route::namespace('App\Http\Controllers')->middleware('auth')->group(function () {
    Route::prefix('')->group(function () { //you can use prefix if you want
      Route::get('/list/delete/{id}', 'listAkun@delete');
    });
});

// Route::get('/list/add','listAkun@add');

// Route::post('/list/store','listAkun@store');


require __DIR__.'/auth.php';
