<?php

class PostController extends BaseController {
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

    public function postComment() {               
        $regles = array(
            'titre' => 'required|min:2|max:100',
            'message' => 'required|max:450'
        );
        $date = date("Y-m-d H:i:s");

        $validation = Validator::make(Input::all(), $regles);

        if ($validation->fails()) {
            return Redirect::to('article/' . Input::get('post_id'))->withErrors($validation)->withInput();
        } else {
            DB::table('comments')->insert(
                    array('id' => '', 'post_id' => Input::get('post_id'), 'title' => Input::get('titre'), 'content' => Input::get('message'), 'date' => $date, 'status' => 'attente')
            );
            return View::make('site.confirm_comment');
        }
    }

    public function showPost($id) {
        $comments = Comment::where('post_id', '=', $id)
                        ->where('status', '=', 'publish')
                        ->select('title', 'content', 'date')
                        ->orderBy('date', 'desc')->paginate(5);

        $post = Post::join('users', 'users.id', '=', 'posts.user_id')
                        ->select('posts.id as post_id', 'users.id as user_id', 'title', 'content', 'date', 'username', 'url_thumbnail')
                        ->where('posts.id', '=', $id)->get();

        $links = $comments->links();
        return View::make('site.article', array('post' => $post, 'comments' => $comments, 'links' => $links));
    }


}
