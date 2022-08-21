<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\IncomingController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::controller(IncomingController::class)->group(function () {
    Route::get('/webhook/callback', 'setwebhook');
    Route::post('/webhook/callback', 'incomingmessage');
    Route::post('/message/send', 'sendmessage');
});
