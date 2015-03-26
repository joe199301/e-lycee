<?php

class ContactController extends BaseController {
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
    public function __construct() {
        $this->beforeFilter('csrf', ['on' => 'post']);
    }
    
    public function showContact() {
        //retourne la vue 'contact'
        return View::make('site.contact');
    }

    public function postContact() {
        $data = Input::all();

        //Règles de validation
        $rules = array(
            'email' => 'required|email',
            'sujet' => 'required|min:3|max:100',
            'message' => 'required|min:10'
        );

        //Validation des données
        $validator = Validator::make($data, $rules);

        //Si les règles passent
        if ($validator->passes()) {

            //Send email using Laravel send function
            Mail::send('emails.contact', $data, function($m) {
                $m->to('lycee@example.com', 'Lycee')->subject('Contact');
            });

            return View::make('site.confirm_contact');
        } else {
            //retourne sur la page contact avec les erreurs
            return Redirect::to('contact')->withErrors($validator);
        }
    }

}
