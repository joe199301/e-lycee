@extends('template.template')

@include('template.navigation')

@section('content')
@foreach ($posts as $post)
<?php
$nbr_comments = DB::table('comments')->where('status', '=', 'actif')->where('post_id', '=', $post->post_id)->count();
?>
<section class="article_actu">
    <div id="actus_1">
        {{ HTML::image($post->url_thumbnail, $post->title) }}
    </div>
    <div id="actus_2">
        <h2>{{ $post->title }}</h2>
        <p>{{substr($post->content,0,300)}}...</p>
        <a href="{{ url('article/'.$post->post_id) }}">Lire la suite...</a>
        <p style="font-weight: bold;">{{ $nbr_comments }} commentaire(s)</p>
    </div>
    <div style="clear:both;"></div>
</section>
@endforeach

<center>{{ $posts->links() }}</center>

@include('template.aside')
@stop