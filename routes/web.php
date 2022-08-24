<?php

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

Route::get('/', function () {
    return view('home');
});

Route::get('/nuka-world', function () {
    return view('nuka-world');
});


// INSCRIPTION
// MIDDLEWARES à ajouter dans le Kernel.php
Route::get('/inscription', 'App\Http\Controllers\UserController@AffichageFormulaireInscription')->middleware('NotLogged');
Route::post('/inscription', 'App\Http\Controllers\UserController@InscriptionAction')->middleware('NotLogged');


// CONNEXION
Route::get('/connexion', 'App\Http\Controllers\UserController@AffichageFormulaireConnexion')->middleware('NotLogged');
Route::post('/connexion', 'App\Http\Controllers\UserController@ConnexionAction')->middleware('NotLogged');


// DÉCONNEXION
Route::get('/deconnexion', 'App\Http\Controllers\UserController@DeconnexionAction')->middleware('isLogged');


// MON COMPTE
Route::get('/mon-profil', 'App\Http\Controllers\UserController@AffichageMonCompte')->middleware('isLogged');
Route::post('/mon-profil', 'App\Http\Controllers\UserController@UpdateAction')->middleware('isLogged');
Route::post('/items', 'App\Http\Controllers\UserController@PostItems')->middleware('isLogged');
Route::get('/modifier-avatar', 'App\Http\Controllers\UserController@AffichageAvatar')->middleware('isLogged');
Route::post('/modifier-avatar', 'App\Http\Controllers\UserController@UpdateAvatarAction')->middleware('isLogged');

// GESTION UTILISATEUR
Route::get('/gestion-utilisateur', 'App\Http\Controllers\UserManagementController@AffichageGestion')->middleware('isAdmin');

// MAIL
Route::get('/message', "App\Http\Controllers\MessageController@formMessageGoogle");
Route::post('/message', "App\Http\Controllers\MessageController@sendMessageGoogle")->name('send.message.google');

// MOT DE PASSE OUBLIÉ
Route::get('/forget-password', 'App\Http\Controllers\ForgotPasswordController@getEmail');
Route::post('/forget-password', 'App\Http\Controllers\ForgotPasswordController@postEmail');

// RÉINITIALISER LE MOT DE PASSE 
Route::get('/reset-password/{token}', 'App\Http\Controllers\ResetPasswordController@getPassword');
Route::post('/reset-password', 'App\Http\Controllers\ResetPasswordController@updatePassword');
