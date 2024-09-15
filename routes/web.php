<?php
use App\Http\Controllers\JobController;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/contact', 'contact');

Route::resource('jobs', JobController::class);
