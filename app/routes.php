<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the Closure to execute when that URI is requested.
  |
 */

Route::get('/', 'HomeController@index');
Route::get('article/{id}', 'PostController@showPost');
Route::get('actus', 'ActusController@showActus');
Route::get('lycee', 'LyceeController@showLycee');
Route::post('article/{id}', 'PostController@postComment');
Route::get('mentions', array('as' => 'mentions', function() {
return View::make('site.mentions');
}));

Route::get('contact', 'ContactController@showContact');
Route::post('contact', 'ContactController@postContact');

Route::get('connexion', 'ConnexionController@showConnexion');
Route::post('connexion', 'ConnexionController@postConnexion');

Route::group(['prefix' => 'admin', 'before' => 'Auth'], function() {
    
    Route::get('accueil', 'AdminController@showAccueil');
    Route::get('eleve', 'AdminController@showEleve');
    Route::get('deconnexion', 'AdminController@deconnexion');
    
    Route::get('user/{id}', 'AdminController@affUser');
    Route::post('user/{id}', 'AdminController@modifUser');

    Route::get('comment', 'AdminController@showComment');
    Route::post('comment', 'AdminController@postComment');
});

Route::group(['prefix' => 'admin/article', 'before' => 'Auth'], function() {
    Route::get('/', 'AdminController@showArticle');
    Route::get('/{id}', 'AdminController@affArticle');
    Route::post('/{id}', 'AdminController@modifArticle');
    Route::get('/add/ajouter', 'AdminController@ajouterArticle');
    Route::post('/add/ajouter', 'AdminController@postAjouterArticle');
});

Route::group(['prefix' => 'admin/fiche', 'before' => 'Auth'], function() {
    Route::get('/', 'AdminController@showFiche');
    Route::post('/', 'AdminController@changeStatus');
    Route::get('/{id}', 'AdminController@affFiche');
    Route::post('/{id}', 'AdminController@modifFiche');
    Route::get('/add/ajouter1', 'AdminController@ajouterFiche');
    Route::get('/add/ajouter2', function() {
        return View::make('admin.ajouter_fiche_admin2');
    });
    Route::post('/add/ajouter2', 'AdminController@postAjouterFiche2');
    Route::get('/add/ajouter_terminer', function() {
        return View::make('admin.ajouter_fiche_admin_terminer');
    });
    Route::post('/add/ajouter_terminer', 'AdminController@postAjouterFicheTerminer');
});
