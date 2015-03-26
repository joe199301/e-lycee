<?php

class ConnexionController extends BaseController {
    /*
      |--------------------------------------------------------------------------
      | Default Home Controller
      |--------------------------------------------------------------------------
      |
      | You may wish to use controllers instead of, or in addition to, Closure
      | based routes. That's great! Here is an example controller method to
      | get you started. To route to this controller, just add the route:
      |
      |	Route::get('/', 'HomeController@showWelcome');
      |
     */

    public function postConnexion() {
        // créer des règles pour les champs
        $rules = array(
            'username' => 'required|min:2',
            'password' => 'required|alphaNum|min:3' // le password ne peut etre que des alphanumériques et > à 3 caractèrse
        );

        // lance la validations des champs
        $validator = Validator::make(Input::all(), $rules);

        // si la validation fails, on redirige vers conexio
        if ($validator->fails()) {
            return Redirect::to('connexion')
                            ->withErrors($validator) // envoi toutes les erreurs dans le formulaire de connexion
                            ->withInput(Input::except('mdp')); // n'envoi pas le champs mdp
        } else {

            // creer un userdata admin pour l'authentification
            $userdata_admin = array(
                'username' => Input::get('username'),
                'password' => Input::get('password'),
                'role' => 'teacher'
            );
            // creer un userdata first_class pour l'authentification
            $userdata_first = array(
                'username' => Input::get('username'),
                'password' => Input::get('password'),
                'role' => 'first_class'
            );
            // creer un userdata final_class pour l'authentification
            $userdata_final = array(
                'username' => Input::get('username'),
                'password' => Input::get('password'),
                'role' => 'final_class'
            );
            // on verifie si les datas correspondent aux données de la base
            if (Auth::attempt($userdata_admin)) {
                // validation réussi
                return Redirect::to('admin/accueil');
            } elseif (Auth::attempt($userdata_first)) {
                return View::make('site.confirm_connexion');
            } elseif (Auth::attempt($userdata_final)) {
                return View::make('site.confirm_connexion');
            } else {
                // validation non réussi, on redirige vers connexion
                return Redirect::to('connexion');
            }
        }
    }

    public function showConnexion() {
        return View::make('site.connexion');
    }

}
