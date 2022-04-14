<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;



Route::middleware('auth_api')->get('/user/{id}', function (Request $request, $id) {
    $user = \App\Models\User::find($id);
    if (!$user) return response('', 404);
    return $user;
});


Route::group(
    ['middleware' => 'auth_api'],
    function () {
        Route::get('/user',  function () {
            $user = \App\Models\User::all();
            return $user;
        });

        // Route::get(
        //     '/token/create',
        //     [\App\Http\Controllers\ApiTokenController::class, 'createToken']
        // );
    }
);

Route::get('/product',  [ProductController::class, 'getAllProduct']);
Route::get('/product/{id}',  [ProductController::class, 'productCategories']);
Route::post('/product/sortByCat',  [ProductController::class, 'sortByCatId']);
Route::post('/product/sortByPrice',  [ProductController::class, 'sortByPrice']);

Route::get('/category',  [CategoryController::class, 'getAllCategory']);
Route::get('/category/{id}',  [CategoryController::class, 'productCategories']);


Route::get('/', function () {
    return view('welcome');
});
Route::get(
    '/token/create',
    [\App\Http\Controllers\ApiTokenController::class, 'createToken']
);
