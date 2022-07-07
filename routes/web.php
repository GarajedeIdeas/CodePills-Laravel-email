<?php

use Illuminate\Support\Facades\Route;

use App\Mail\Notification;
use Illuminate\Support\Facades\Mail;

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
    //return new Notification("You");

    $response = Mail::mailer("smtp")->to('somebody@email.em')->send(new Notification("You"));

    dump($response);

});
