@extends('template.template')

@include('template.navigation')

@section('content')

<main id="page_article">
    <section id="article">
        {{ HTML::image($post[0]->url_thumbnail, $post[0]->title) }}
        <h2>{{ $post[0]->date }} / <span>{{ $post[0]->title }}</span></h2>
        <p>{{ $post[0]->content }}</p>
        <p>Auteur: {{ $post[0]->username }}</p>
    </section>
    <section id="commentaires">
            <div id="comment_form">
                <h3>Laisser un commentaire</h3>

                {{ Form::open(array('url' => 'article/'.$post[0]->post_id, 'method' => 'post')) }}
                {{ Form::label('titre', 'Titre'); }}
                <small class="text-danger">{{ $errors->first('titre') }}</small>
                {{ Form::text('titre', null, ['class' => 'form-control', 'placeholder' => 'Entrer votre titre']); }}
                <br>
                {{ Form::label('message', 'Message'); }}
                <small class="text-danger">{{ $errors->first('message') }}</small>
                {{ Form::textarea('message', null, ['class' => 'form-control', 'placeholder' => 'Entrer votre message']) }}
                {{ Form::submit('Envoyer', ['class' => 'btn btn-default']) }}
                {{ Form::hidden('post_id', $post[0]->post_id) }}
                {{ Form::close() }}
            </div>
       
        <div id="comment_aff">
            <h3>Tous les commentaires</h3>
            @foreach ($comments as $comment)
            <div id="comment1">
                <h4>{{ $comment->title }} / <span style="font-weight:normal;">{{ $comment->date }}</span></h4>
                <p>{{ $comment->content }}</p>
            </div>
            @endforeach

            <center>{{ $comments->links() }}</center>
        </div>
    </section>
</main>
@stop
@include('template.aside')