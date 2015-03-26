@extends('template.template_admin')

@include('template.navigation_admin')

@section('content_admin')
<main id="ajouter_fiche">
    <h2>Ajouter un QCM - Etape 1</h2>
    <form action='{{ url('admin/fiche/add/ajouter2') }}' method="POST">
        {{ Form::token() }}
        <div class="form-group">
            <small class="text-danger">{{ $errors->first('class_level') }}</small><br><br>
            <label class="col-sm-2 control-label">Niveau:</label>
            <div class="col-sm-10">
                <select name="class_level" class="form-control">
                    <option>first_class</option>
                    <option>final_class</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <small class="text-danger">{{ $errors->first('nbr_choix') }}</small><br><br>
            <label class="col-sm-2 control-label">Nombre de choix:</label>
            <div class="col-sm-10">
                <input type="text" name="nbr_choix" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <small class="text-danger">{{ $errors->first('title') }}</small><br><br>
            <label class="col-sm-2 control-label">Titre:</label>
            <div class="col-sm-10">
                <input type="text" name="title" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <small class="text-danger">{{ $errors->first('question_content') }}</small><br><br>
            <label for="inputPassword" class="col-sm-2 control-label">Redaction de la question:</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="question_content" rows="3"></textarea>
            </div>
        </div>
        <center><button style="clear:both;margin-top: 15px;" type="submit" class="btn btn-default">Etape 2 =></button></center>
    </form>
</main>
@stop