<?php

class AdminController extends BaseController {
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

    public function showAccueil() {
        $fiches = DB::table('questions')->select('id', 'title', 'status')
                        ->orderBy('date', 'desc')->take(3)->get();
        $articles = DB::table('posts')->select('id', 'title', 'status')
                        ->orderBy('date', 'desc')->take(3)->get();
        $eleves = DB::table('users')->select('id', 'username', 'role')
                        ->whereIn('role', array('first_class', 'final_class'))->take(3)->get();
        return View::make('admin.accueil_admin', array('fiches' => $fiches, 'articles' => $articles, 'eleves' => $eleves));
    }

    public function showFiche() {
        $fiches = DB::table('questions')->select('id', 'title', 'status', 'date', 'class_level')
                        ->orderBy('date', 'desc')->paginate(10);
        $links = $fiches->links();
        return View::make('admin.fiche_admin', array('fiches' => $fiches, 'links' => $links));
    }

    public function showComment() {
        $comments = DB::table('comments')->select('id', 'post_id', 'title', 'content', 'date', 'status')
                        ->orderBy('date', 'desc')->paginate(20);
        $links = $comments->links();
        return View::make('admin.comment_admin', array('comments' => $comments, 'links' => $links));
    }

    public function showEleve() {
        $eleves = DB::table('users')->select('id', 'username', 'role')
                ->whereIn('role', array('first_class', 'final_class'))
                ->paginate(10);
        $links = $eleves->links();
        return View::make('admin.eleve_admin', array('eleves' => $eleves, 'links' => $links));
    }

    public function showArticle() {
        $articles = Post::join('users', 'users.id', '=', 'posts.user_id')
                        ->select('posts.id as post_id', 'users.id as user_id', 'title', 'content', 'date', 'username', 'url_thumbnail', 'status')
                        ->orderBy('date', 'desc')->paginate(10);
        $links = $articles->links();
        return View::make('admin.article_admin', array('articles' => $articles, 'links' => 'links'));
    }

    public function affFiche($id) {
        /* $fiche = Question::join('choices', 'questions.id', '=', 'choices.question_id')
          ->select('questions.id as question_id', 'choices.id as choice_id', 'title', 'questions.status as question_status', 'questions.content as question_content', 'choices.content as choice_content', 'date', 'class_level')
          ->where('questions.id', '=', $id)->get(); */
        $fiche = Question::select('id', 'title', 'content', 'status', 'date', 'class_level')
                        ->where('id', '=', $id)->get();
        $choices = Question::join('choices', 'questions.id', '=', 'choices.question_id')
                        ->select('choices.id as choice_id', 'choices.choice_id as id_choice', 'choices.status as choice_status', 'choices.content as choice_content')
                        ->where('questions.id', '=', $id)->get();
        return View::make('admin.aff_fiche_admin', array('fiche' => $fiche, 'choices' => $choices));
    }

    public function modifFiche($id) {
        DB::table('questions')
                ->where('id', $id)
                ->update(array('title' => Input::get('title'), 'content' => Input::get('question_content'), 'class_level' => Input::get('class_level'), 'status' => Input::get('question_status')));
        $nbr_choices = DB::table('choices')->where('question_id', '=', $id)->count();
        for ($i = 1; $i <= $nbr_choices; $i++) {
            DB::table('choices')
                    ->where('id', $i)
                    ->update(array('content' => Input::get('choice_content' . $i), 'status' => Input::get('choice_status' . $i)));
        }
        return View::make('admin.modif');
    }

    public function ajouterFiche() {
        return View::make('admin.ajouter_fiche_admin1');
    }

    public function postAjouterFiche2() {
        $regles = array(
            'title' => 'required|max:100',
            'nbr_choix' => 'required|max:10|numeric',
            'question_content' => 'required|max:450'
        );
        $date = date("Y-m-d H:i:s");

        $validation = Validator::make(Input::all(), $regles);

        if ($validation->fails()) {
            return Redirect::to('admin/fiche/add/ajouter1')->withErrors($validation)->withInput();
        } else {
            $title = Input::get('title');
            $nbr_choix = Input::get('nbr_choix');
            $question_content = Input::get('question_content');
            $class_level = Input::get('class_level');

            return View::make('admin.ajouter_fiche_admin2', array('title' => $title, 'nbr_choix' => $nbr_choix, 'question_content' => $question_content, 'class_level' => $class_level));
        }
    }

    public function postAjouterFicheTerminer() {
        DB::table('questions')->insert(
                array('id' => '', 'title' => Input::get('title'), 'content' => Input::get('question_content'), 'date' => date("Y-m-d"), 'class_level' => Input::get('class_level'), 'status' => 'publish')
        );

        $id_question = DB::table('questions')->select('id')->where('title', '=', Input::get('title'))->first();

        for ($i = 1; $i <= Input::get('nbr_choix'); $i++) {

            DB::table('choices')->insert(
                    array('id' => '', 'question_id' => $id_question->id, 'choice_id' => $i, 'content' => Input::get("choix_content$i"), 'status' => Input::get("reponse$i"))
            );
        }

        return Redirect::to('admin/fiche/add/ajouter_terminer');
    }

    public function affArticle($id) {
        $article = Post::join('users', 'users.id', '=', 'posts.user_id')->select('posts.id as id', 'username', 'title', 'content', 'url_thumbnail', 'date', 'status')
                        ->where('posts.id', '=', $id)->get();
        return View::make('admin.aff_article_admin', array('article' => $article));
    }

    public function modifArticle($id) {
        DB::table('posts')
                ->where('id', $id)
                ->update(array('title' => Input::get('title'), 'content' => Input::get('content'), 'status' => Input::get('status'), 'url_thumbnail' => Input::get('url_thumbnail')));

        return View::make('admin.modif');
    }

    public function ajouterArticle() {
        return View::make('admin.ajouter_article_admin');
    }

    public function postAjouterArticle() {
        $regles = array(
            'title' => 'required|max:200',
            'url_thumbnail' => 'required|max:400',
            'content' => 'required|max:100000'
        );
        $date = date("Y-m-d H:i:s");

        $validation = Validator::make(Input::all(), $regles);

        if ($validation->fails()) {
            return Redirect::to('admin/article/add/ajouter')->withErrors($validation)->withInput();
        } else {
            DB::table('posts')->insert(
                    array('id' => '', 'user_id' => Auth::user()->id, 'title' => Input::get('title'), 'abstract' => '', 'content' => Input::get('content'), 'url_thumbnail' => Input::get('url_thumbnail'), 'date' => date("Y-m-d"), 'status' => 'publish')
            );

            return Redirect::to('admin/fiche/add/ajouter_terminer');
        }
    }

    public function affUser($id) {
        $user = User::select('id', 'username', 'password', 'role')
                        ->where('id', '=', $id)->get();
        return View::make('admin.aff_user_admin', array('user' => $user));
    }

    public function modifUser($id) {
        DB::table('users')
                ->where('id', $id)
                ->update(array('username' => Input::get('username'), 'password' => Input::get('password'), 'role' => Input::get('role')));

        return View::make('admin.modif');
    }

    public function deconnexion() {
        Auth::logout();
        return Redirect::to('/');
    }

}
