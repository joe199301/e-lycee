@extends('template.template_admin')

@include('template.navigation_admin')

@section('content_admin')
{{ HTML::script('packages/ckeditor/ckeditor.js') }}
{{ HTML::script('packages/ckeditor/integrer.js') }}

<main id="ajouter_fiche">
    <h2>Ajouter un article</h2>
    <form action='{{ url('admin/article/add/ajouter') }}' method="POST">
        {{ Form::token() }}
        <div class="form-group">
            <small class="text-danger">{{ $errors->first('url_thumbnail') }}</small><br><br>
            <label class="col-sm-2 control-label">URL image:</label>
            <div class="col-sm-10">
                <input type="text" name="url_thumbnail" class="form-control">
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
            <small class="text-danger">{{ $errors->first('content') }}</small><br><br>
            <label for="inputPassword" class="col-sm-2 control-label">Contenu:</label>
            <div class="col-sm-10">
                 <textarea cols="20" id="editor1" name="content" rows="10"></textarea>
            </div>
        </div>
       
        <script>
            // Replace the <textarea id="editor1"> with an CKEditor instance.
            CKEDITOR.replace('content', {
                on: {
                    focus: onFocus,
                    blur: onBlur,
                    // Check for availability of corresponding plugins.
                    pluginsLoaded: function(evt) {
                        var doc = CKEDITOR.document, ed = evt.editor;
                        if (!ed.getCommand('bold'))
                            doc.getById('exec-bold').hide();
                        if (!ed.getCommand('link'))
                            doc.getById('exec-link').hide();
                    }
                }
            });
        </script>
        <center><button style="clear:both;margin-top: 15px;" type="submit" class="btn btn-default">Cr&eacute;er</button></center>
    </form>
</main>
@stop