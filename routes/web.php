<?php

use Illuminate\Support\Facades\Route;
use App\CurrentSchool\CurrentSchool;
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

Route::middleware('web')->domain(env('SITE_URL'))->group(function () {

});
Route::middleware('web')->domain('{school}.'.env('SITE_URL'))->group(function ($schoolName) {
   Route::get('/', function($school) {
       dd(CurrentSchool::getCurrentSchool());

   });
});
