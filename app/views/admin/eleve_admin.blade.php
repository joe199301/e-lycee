@extends('template.template_admin')

@include('template.navigation_admin')

@section('content_admin')
<main id="fiche">
    <h2>Les &eacute;l&egrave;ves</h2>
        <table class="table">
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Classe</th>
            </tr>
            @foreach ($eleves as $eleve)
            <tr>
                <td>{{ $eleve->id }}</td>
                <td><a href="{{ url('admin/user/'.$eleve->id) }}">{{ $eleve->username }}</a></td>
                <td><span style="font-size:0.8em;font-style: italic;">
                    @if ($eleve->role == 'first_class')
                    premi&egrave;re
                    @elseif ($eleve->role == 'final_class')
                    terminale
                    @endif
                    </span></td>
            </tr>           
            @endforeach

        </table>
    </form>
    <center>{{ $eleves->links() }}</center>
</main>
@stop