<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Company;
use App\Http\Resources\CompanyCollection;

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

Route::get('/company/{id?}', function () {
    $res = Company::all();
//    return $res;
    return new CompanyCollection($res);
});



