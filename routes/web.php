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
})->name('/');

Route::get('/about', function () {
    echo "This is about page";
})->name('about')->middleware('checkAge');


Route::any('contact-us',[\App\Http\Controllers\ContactUsController::class, 'index'])->name('contact-us');

Route::middleware([ 'auth:sanctum', config('jetstream.auth_session'), 'verified' ])->group(function () {
    Route::get('/dashboard', function () {
//        $users = \App\Models\User::all();
        $users = \Illuminate\Support\Facades\DB::table('users')->get();
        return view('dashboard', compact('users'));
    })->name('dashboard');

    Route::resource('category',\App\Http\Controllers\CategoryController::class);
});
