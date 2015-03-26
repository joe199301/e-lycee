@extends('template.template_admin')

@include('template.navigation_admin')

@section('content_admin')

<main id="aff_fiche">
    <h2>QCM {{ $fiche[0]->title }} <span style="font-size: 0.8em;font-weight: normal;font-style: italic;">{{ $fiche[0]->date }}</span></h2>
    <form id='form_checkbox' action='{{ url('admin/fiche/'.$fiche[0]->id) }}' method="POST">
        {{ Form::token() }}
        <div class="form-group">
            <label for="inputPassword" class="col-sm-2 control-label">Titre:</label>
            <div class="col-sm-10">
                <input type="text" name="title" class="form-control" value="{{ $fiche[0]->title }}">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword" class="col-sm-2 control-label">Contenu QCM:</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="question_content" rows="3">{{ $fiche[0]->content }}</textarea>
            </div>
        </div>  
        <div class="form-group">
            <label for="inputPassword" class="col-sm-2 control-label">Niveau:</label>
            <div class="col-sm-10">

                <select name="class_level" class="form-control">
                    <option
                        @if ($fiche[0]->class_level == 'first_class')
                        {{ "selected" }}
                        @endif
                        >
                        first_class</option>
                    <option 
                        @if ($fiche[0]->class_level == 'final_class')
                        {{ "selected" }}
                        @endif
                        >
                        final_class</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword" class="col-sm-2 control-label">Status:</label>
            <div class="col-sm-10">
                <select name="question_status" class="form-control">
                    <option 
                        @if ($fiche[0]->status == 'publish')
                        {{ "selected" }}
                        @endif
                        >publish</option>
                    <option
                        @if ($fiche[0]->status == 'unpublish')
                        {{ "selected" }}
                        @endif
                        >unpublish</option>
                </select>
            </div>
        </div>
        <br>
        @foreach ($choices as $choice)
        <h3>Choix {{ $choice->id_choice }}</h3>
        <div class="form-group">
            <label for="inputPassword" class="col-sm-2 control-label">Contenu choix:</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="choice_content{{ $choice->id_choice }}" rows="3">{{ $choice->choice_content }}</textarea>
            </div>
        </div>  
        <div class="form-group">
            <label for="inputPassword" class="col-sm-2 control-label">Reponse:</label>
            <div class="col-sm-10">

                <select name="choice_status{{ $choice->id_choice }}" class="form-control">
                    <option
                        @if ($choice->choice_status == 'yes')
                        {{ "selected" }}
                        @endif
                        >
                        Yes</option>
                    <option 
                        @if ($choice->choice_status == 'no')
                        {{ "selected" }}
                        @endif
                        >
                        No</option>
                </select>
            </div>
        </div>
        @endforeach
        
        <center><button style="clear:both;margin-top: 15px;" type="submit" class="btn btn-default">Modifier</button></center>

    </form>
</main>
@stop