@extends('template.template_admin')

@include('template.navigation_admin')

@section('content_admin')
<style>
    .choix{
        width:300px;
        display:block;
        margin:0 auto;
    }
</style>
<main id="ajouter_fiche">
    <h2>Ajouter un QCM - Etape 2</h2>
    <form action='{{ url('admin/fiche/add/ajouter_terminer') }}' method="POST">
        {{ Form::token() }}
        
        <INPUT type="hidden" name="nbr_choix" value="{{ $nbr_choix }} ">
        <INPUT type="hidden" name="title" value="{{ $title }} ">
        <INPUT type="hidden" name="question_content" value="{{ $question_content }} ">
        <INPUT type="hidden" name="class_level" value="{{ $class_level }} ">
        
        @for ($i = 1; $i <= $nbr_choix; $i++)
        <div class="choix">
            <h3>Choix {{ $i }} </h3>
            <textarea class="form-control" name="choix_content{{ $i }}" rows="3"></textarea>
            <INPUT type="radio" name="reponse{{ $i }}" value="yes"> yes
            <INPUT type="radio" name="reponse{{ $i }}" value="no"> no
        </div>        
        @endfor        
        <center><button style="clear:both;margin-top: 15px;" type="submit" class="btn btn-default">Terminer</button></center>
    </form>
</main>
@stop