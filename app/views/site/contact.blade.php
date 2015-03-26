@extends('template.template')

@include('template.navigation')

@section('content')

<main id="page_contact">
    <h2>Contact</h2>
    {{ Form::open(array('url' => 'contact', 'method' => 'post')) }}
    {{ Form::label('email', 'E-mail'); }}
    <br>
    <small class="text-danger">{{ $errors->first('email') }}</small>
    {{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Entrer votre e-mail']); }}
    <br>
    {{ Form::label('sujet', 'Sujet'); }}
    <small class="text-danger">{{ $errors->first('sujet') }}</small>
    {{ Form::text('sujet', null, ['class' => 'form-control', 'placeholder' => 'Entrer votre sujet']); }}
    <br>
    {{ Form::label('message', 'Message'); }}
    <br>
    <small class="text-danger">{{ $errors->first('message') }}</small>
    {{ Form::textarea('message', null, ['class' => 'form-control', 'placeholder' => 'Entrer votre message']) }}
    <br>
    <center>{{ Form::submit('Envoyer', ['class' => 'btn btn-default']) }}</center>
    {{ Form::close() }}
</main>
@stop
@include('template.aside')