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
	$activclass = "blog";
	// $users = factory(App\User::class, 1000)->create();
	// dd($users);
    return view('blog',compact('activclass'));
});


Route::get('/askexpert', function () {
	$activclass = "expert";
    return view('askexpert',compact('activclass'));
});
