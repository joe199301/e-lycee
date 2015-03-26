@extends('template.template')

@include('template.navigation')

@section('content')

<main id="articles_home">
    <article id="grand_home">
        {{ HTML::image($posts[0]->url_thumbnail, $posts[0]->title) }}
        <div>
            <h2>{{$posts[0]->title}}</h2>
            <p>{{substr($posts[0]->content,0,300)}}...</p>
            <a href="{{ url('article/'.$posts[0]->post_id)}}" >Lire la suite...</a>
            <div style="clear:both;"></div>
            <p>Auteur: {{$posts[0]->username}}</p>
            <?php 
            $nbr_comments = DB::table('comments')->where('status', '=', 'actif')->where('post_id', '=', $posts[0]->post_id)->count();
            ?>
            {{ HTML::image('assets/img/commentaires.jpg', 'Commentaires') }}<a id="comment" href="{{ url('article/'.$posts[0]->post_id) }}">{{ $nbr_comments }} commentaires(s) r&eacute;agissez</a>
        </div>
    </article>
    <div id="petit_home">
        @for ($i = 1; $i < count($posts); $i++)
        <article id="petit1_home">
            {{ HTML::image($posts[$i]->url_thumbnail, $posts[$i]->title) }}
            <div>
                <h2>{{$posts[$i]->title}}</h2>
                <p>{{substr($posts[$i]->content,0,300)}}...</p>
                <a href="{{ url('article/'.$posts[$i]->post_id) }}" >Lire la suite...</a>
                <div style="clear:both;"></div>
            </div>
        </article>
        @endfor
    </div>
    <div style="clear:both;"></div>
</main>
@include('template.aside')

@stop