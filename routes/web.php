<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CategoryController;
use App\Models\User;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ApiTokenController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::middleware('auth_api')->get('/user/?token={token}', function(Request $request, $token){
    $user = User::where('remember_token', $token)->first();
    if(!$user) return response("", 404);
    
    return $token;
});

// Route::group(['middleware' => 'auth_api'], function () {
    
//     //Адимн-панель(/admin)
    
    
      
// });


Route::get('/token/create', [ApiTokenController::class, 'createToken']);


// Route::get('/token/create', [ApiTokenController::class, 'createToken']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index',  [ProductController::class, 'index'])->name('index');
