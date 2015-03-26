<?php

class LyceeController extends BaseController {
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


    public function showLycee() {
        $posts_aside = Post::join('users', 'users.id', '=', 'posts.user_id')
          ->select('posts.id as post_id', 'title')
          ->orderBy('date', 'desc')->take(5)->get();
        
        return View::make('site.lycee', array('posts_aside' => $posts_aside));
    }

}
