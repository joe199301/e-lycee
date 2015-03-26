@extends('template.template')

@include('template.navigation')

@section('content')

<main id="page_connexion">
    <h2>Connexion</h2>
    {{ Form::open(array('action' => 'ConnexionController@postConnexion')) }}
    {{ Form::label('username', 'Identifiant'); }}
    <br>
    <small class="text-danger">{{ $errors->first('username') }}</small>
    {{ Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Entrer votre identifiant']); }}
    <br>
    {{ Form::label('password', 'Mot de passe'); }}
    <small class="text-danger">{{ $errors->first('password') }}</small>
    {{ Form::password('password',['class' => 'form-control', 'placeholder' => 'Entrer votre mot de passe']); }}<br>
    <center>{{ Form::submit('Connexion', ['class' => 'btn btn-default']) }}</center>
    {{ Form::close() }}
</main>
@stop
@include('template.aside')