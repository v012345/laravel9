<?php

use App\Http\Controllers\RedisController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::any("test", function (Request $request) {
    if ($user =  User::find(2)) {
        return $user;
    } else {
        return User::create(["name" => "123", "email" => random_int(0, 999999) + "v01345@163.com", "password" => encrypt("jifes")]);
    }
});

Route::controller(RedisController::class)->group(function () {
    Route::get("set", "set");
    Route::get("get", "get");
});
