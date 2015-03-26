@extends('template.template_admin')

@include('template.navigation_admin')

@section('content_admin')
<main id="fiche">
    <h2>Les Commentaires</h2>
    <form id='form_checkbox' action='{{ url('admin/comment') }}' method="POST">
        <select class="form-control">
            <option>publier</option>
            <option>depublier</option>
        </select>
        <button type="submit" class="btn btn-default">Appliquer</button>

        <table class="table">
            <tr>
                <th><input type="checkbox" id='tout_cocher' name="tout_cocher" value="tout_cocher" onclick="tout_cocher()"></th>
                <th>Titre</th>
                <th>Id Article</th>
                <th>Date</th>
                <th>Contenu</th>
                <th>Status</th>
            </tr>
            @foreach ($comments as $comment)
            <tr>
                <td>{{ Form::checkbox('name', 'value'); }}</td>
                <td>{{ $comment->title }}</td>
                <td><a href="{{ url('admin/article/'.$comment->post_id) }}">{{ $comment->post_id }}</a></td>
                <td>{{ $comment->date }}</td>
                <td style="font-size:0.6em;">{{ $comment->content}}</td>
                <td>
                    @if ($comment->status == 'publish')
                    <span class="label label-success">Publish</span>
                    @elseif ($comment->status == 'unpublish')
                    <span class="label label-danger">Unpublish</span>
                    @endif
                </td>
            </tr>           
            @endforeach

        </table>
    </form>
    <center>{{ $comments->links() }}</center>
</main>
<script language="javascript">
    $('#tout_cocher').on('click', function() {
        if ($(this).prop('checked') === true) {
            $('#form_checkbox input').prop('checked', true);
            $(this).prop('checked', true);
        } else if ($(this).prop('checked') === false) {
            $('#form_checkbox input').prop('checked', false);
            $(this).prop('checked', false);
        }
    });
</script>
@stop