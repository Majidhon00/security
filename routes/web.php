<?php

use App\Http\Controllers\add1Controller;
use App\Http\Controllers\add1enController;
use App\Http\Controllers\add5Controller;
use App\Http\Controllers\add5enController;
use App\Http\Controllers\comdelController;
use App\Http\Controllers\commentController;
use App\Http\Controllers\con2Controller;
use App\Http\Controllers\contactController;
use App\Http\Controllers\footController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\layoutController;
use App\Http\Controllers\tfController;
use App\Http\Controllers\upd4Controller;
use App\Http\Controllers\updateController;
use App\Http\Controllers\update2Controller;
use App\Http\Controllers\update2enController                ;
use App\Http\Controllers\contactAccController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    return redirect()->route('index.index');
});

Route::get('index',function(){
    return view('index');
});
Route::get('admin1',function(){
    return view('admin.in1');
});
Route::get('adqwqas',function(){
    return view('home');
});
Route::get('/contact',function(){
    return view('home');
});
Route::get('about',function(){
    return view('about');
});
Route::get('service',function(){
    return view('service');
});
Route::get('guard',function(){
    return view('guard');
});
Route::get('blog',function(){
    return view('blog');
});
Route::get('single',function(){
    return view('single');
});

Route::get('tilch/{lang}',[indexController::class,'tilch']);

Route::get('tilclick/{til}',[indexController::class,'tilclick']);

Route::resource('contact',contactController::class);

Route::resource('index',indexController::class);

Route::get('des',[indexController::class,'des']);

Route::resource('admin1',updateController::class)->middleware('auth');

Route::resource('admin',layoutController::class)->middleware('auth');

Route::resource('admin2',update2Controller::class)->middleware('auth');

Route::resource('upd2en',update2enController::class)->middleware('auth');

Route::resource('add1',add1Controller::class)->middleware('auth');

Route::resource('add1en',Add1enController::class)->middleware('auth');

Route::resource('upd4',upd4Controller::class)->middleware('auth');

Route::resource('add5',add5Controller::class)->middleware('auth');

Route::resource('add5en',add5enController::class)->middleware('auth');

Route::resource('tf',tfController::class)->middleware('auth');

Route::resource('footer',footController::class)->middleware('auth');

Route::resource('comment',commentController::class);

Route::resource('comdel',comdelController::class)->middleware('auth');

Route::resource('contactAcc',contactAccController::class);

Route::resource('con2',con2Controller::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
