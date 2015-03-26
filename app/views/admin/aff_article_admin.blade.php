@extends('template.template_admin')

@include('template.navigation_admin')

@section('content_admin')
{{ HTML::script('packages/ckeditor/ckeditor.js') }}
{{ HTML::script('packages/ckeditor/integrer.js') }}

<main id="aff_article">
    <h2>{{ $article[0]->title }} <span style="font-size: 0.8em;font-weight: normal;font-style: italic;">{{ $article[0]->date }}</span></h2>
    <form id='form_checkbox' action='{{ url('admin/article/'.$article[0]->id) }}' method="POST">
        {{ Form::token() }}
        <div class="form-group">
            <label class="col-sm-2 control-label">Titre:</label>
            <div class="col-sm-10">
                <input type="text" name="title" class="form-control" value="{{ $article[0]->title }}">
            </div>
        </div><br><br>
        <div class="form-group">
            <label class="col-sm-2 control-label">Contenu:</label>
            <div class="col-sm-10">
                <textarea cols="20" id="editor1" name="content" rows="10">{{ $article[0]->content }}</textarea>
            </div>
        </div>  <br><br>
        <div class="form-group">
            <label class="col-sm-2 control-label">URL image:</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="url_thumbnail" rows="3">{{ $article[0]->url_thumbnail }}</textarea>
            </div>
        </div> <br><br>
        <img style="margin:20px;" src="{{ $article[0]->url_thumbnail }}" alt="Image" />

        <div class="form-group">
            <label class="col-sm-2 control-label">Status:</label>
            <div class="col-sm-10">

                <select name="status" class="form-control">
                    <option 
                        @if ($article[0]->status == 'publish')
                        {{ "selected" }}
                        @endif
                        >publish</option>
                    <option 
                        @if ($article[0]->status == 'unpublish')
                        {{ "selected" }}
                        @endif
                        >unpublish</option>
                </select>
            </div>
        </div>

        <center><button style="clear:both;margin-top: 15px;" type="submit" class="btn btn-default">Modifier</button></center>

    </form>
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
</main>
@stop