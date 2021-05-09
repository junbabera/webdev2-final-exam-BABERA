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


Route::get('/bible-study-request-form', 'BibleStudyController@biblestudyrequests');
Route::post('/bible-study-form-create', 'BibleStudyController@create');
Route::get('/bible-study-requests', 'BibleStudyController@tableform');
Route::get('/thank-you', 'BibleStudyController@thankyou');