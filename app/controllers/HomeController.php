<?php

class HomeController extends BaseController {
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

    public function index() {

        $posts = Post::join('users', 'users.id', '=', 'posts.user_id')
                        ->select('posts.id as post_id', 'users.id as user_id', 'title', 'content', 'username', 'url_thumbnail')
                        ->orderBy('date', 'desc')->take(3)->get();

        //$posts = Post::with('users')->orderBy('date', 'desc')->take(3)->get();
        //$posts = User::find(1)->posts();
        return View::make('site.accueil', compact('posts'));
    }

}
