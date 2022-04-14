<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CategoryController;
use App\Models\User;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ApiTokenController;

Route::group(
    ['middleware' => 'auth_api'],
    function () {

        Route::get('/user',  function () {
            $user = \App\Models\User::all();
            return $user;
        });


        Route::get(
            '/token/create',
            [\App\Http\Controllers\ApiTokenController::class, 'createToken']
        );
    }
);




Route::get(
    '/token/create',
    [\App\Http\Controllers\ApiTokenController::class, 'createToken']
);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product',  [ProductController::class, 'getAllProduct'])->name('index');
