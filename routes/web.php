<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Artisan;
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
    return view('welcome');
});

Route::get('/auth/redirect', function () {
    return Socialite::driver('saml2')->redirect();
});

Route::post('/auth/callback', function () {
    $user = Socialite::driver('saml2')->stateless()->user();
    logger($user->user[0]->getAllAttributeValues());
});

Route::get('/auth/saml2/metadata', function () {
    return Socialite::driver('saml2')->getServiceProviderMetadata();
});

Route::get('/auth/saml2/logout', function () {
    $response = Socialite::driver('saml2')->logoutResponse();
});

Route::get('storage-link', function(){
    Artisan::call('storage:link');
    Artisan::call('optimize:clear');
    Artisan::call('config:cache');
});