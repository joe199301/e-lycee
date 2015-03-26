@extends('template.template_admin')

@include('template.navigation_admin')

@section('content_admin')
<main id="fiche">
    <h2>Les articles      <a href='{{ url('admin/article/add/ajouter') }}'>Ajouter</a></h2>
    <form id='form_checkbox' action='{{ url('admin/article') }}' method="POST">
        <select class="form-control">
            <option>publier</option>
            <option>depublier</option>
        </select>
        <button type="submit" class="btn btn-default">Appliquer</button>

        <table class="table">
            <tr>
                <th><input type="checkbox" id='tout_cocher' name="tout_cocher" value="tout_cocher" onclick="tout_cocher()"></th>
                <th>Titre</th>
                <th>Auteur</th>
                <th>Date</th>
                <th>Commentaires</th>
                <th>Status</th>
            </tr>
            @foreach ($articles as $article)
            <tr>
                <td>{{ Form::checkbox('name', 'value'); }}</td>
                <td><a href="{{ url('admin/article/'.$article->post_id) }}">{{ $article->title }}</a></td>
                <td>{{ $article->username }}</td>
                <td>{{ $article->date }}</td>
                <td><?php 
            $nbr_comments = DB::table('comments')->where('post_id', '=', $article->post_id)->count();
            echo $nbr_comments;
            ?></td>
                <td>
                    @if ($article->status == 'publish')
                <span class="label label-success">Publish</span>
                @elseif ($article->status == 'unpublish')
                <span class="label label-danger">Unpublish</span>
                @endif
                </td>
            </tr>           
                @endforeach

        </table>
    </form>
     <center>{{ $articles->links() }}</center>
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