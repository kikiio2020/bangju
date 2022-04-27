<?php

use App\Http\Controllers\Api\HouseholdController;
use App\Http\Controllers\Api\UserController;
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

\Route::get('/', function () {
    return view('welcome');
});

/**
 * Web API
 */
\Route::get(
        'webapi/household/{household}/members',
        'Api\HouseholdController@getHouseholdMembers'
    )->middleware(['auth:sanctum']);
\Route::get('webapi/user/{user}/token/{tokenName?}', 'Api\UserController@getToken');

