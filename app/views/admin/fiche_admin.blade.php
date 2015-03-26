@extends('template.template_admin')

@include('template.navigation_admin')

@section('content_admin')
<main id="fiche">
    <h2>Les fiches      <a href='{{ url('admin/fiche/add/ajouter1') }}'>Ajouter</a></h2>
    <form id='form_checkbox' action='{{ url('admin/fiche') }}' method="POST">
        <select class="form-control">
            <option>publier</option>
            <option>depublier</option>
        </select>
        <button type="submit" class="btn btn-default">Appliquer</button>

        <table class="table">
            <tr>
                <th><input type="checkbox" id='tout_cocher' name="tout_cocher" value="tout_cocher" onclick="tout_cocher()"></th>
                <th>Titre</th>
                <th>Niveau</th>
                <th>Date</th>
                <th>Status</th>
            </tr>
            @foreach ($fiches as $fiche)
            <tr>
                <th>{{ Form::checkbox('fiche'.$fiche->id, 'publier'); }}</th>
                <td><a href="{{ url('admin/fiche/'.$fiche->id) }}">{{ $fiche->title }}</a></td>
                <td>{{ $fiche->class_level }}</td>
                <td>{{ $fiche->date }}</td>
                <td>
                    @if ($fiche->status == 'publish')
                    <span class="label label-success">Publish</span>
                    @elseif ($fiche->status == 'unpublish')
                    <span class="label label-danger">Unpublish</span>
                    @endif
                </td>
            </tr>           
            @endforeach

        </table>
    </form>
    <center>{{ $fiches->links() }}</center>
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