<?php

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

Route::post('decimal-to-binary', 'Api\ConvertNumberController@decimalToBinary');
Route::post('binary-to-decimal', 'Api\ConvertNumberController@binaryToDecimal');
Route::post('palindrome', 'Api\ConvertNumberController@palindrome');

