<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\RoomTypeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () { return view('pages.site.index');});
Route::get('/welcome', function () { return view('layouts.app');});


Auth::routes();

Route::group(["prefix" => "rooms"], function () {
    Route::get("/", [RoomController::class, "index"])->middleware(["auth","is.admin"]);
    Route::post("/", [RoomController::class, "store"])->middleware("auth");
    Route::get("/new", [RoomController::class, "create"])->middleware("auth");
    Route::get("/{room}/book", [RoomController::class, "book"]);
    Route::post("/{room}/book", [BookingController::class, "store"]);
    Route::group(["prefix" => "types"], function () {
        Route::get("/", [RoomTypeController::class, "index"])->middleware("auth");
        Route::post("/", [RoomTypeController::class, "store"])->middleware("auth");
        Route::get("/new", [RoomTypeController::class, "create"])->middleware("auth");
    });
});
