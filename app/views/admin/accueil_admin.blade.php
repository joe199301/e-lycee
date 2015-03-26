@extends('template.template_admin')

@include('template.navigation_admin')

@section('content_admin')
                    
<main id="dashoard">
    <div id="accordion">
        <h3>Gestion des fiches</h3>
        <div>
            <h4>Les derni&egrave;res fiches</h4>
            <ul>
                @foreach ($fiches as $fiche)
                <li><a href="{{ url('admin/fiche/'.$fiche->id) }}">{{ $fiche->title }}</a>
                    @if ($fiche->status == 'publish')
                    <span class="label label-success">Publish</span>
                    @elseif ($fiche->status == 'unpublish')
                    <span class="label label-danger">Unpublish</span>
                    @endif
                </li>
                @endforeach
            </ul>
            <a href="{{ url('admin/fiche') }}">Voir toutes les fiches</a>
        </div>
        <h3>Gestion des articles</h3>
        <div>
            <h4>Les derniers articles</h4>
            <ul>
                @foreach ($articles as $article)
                <li><a href="{{ url('admin/article/'.$fiche->id) }}">{{ $article->title }}</a>
                    @if ($article->status == 'publish')
                    <span class="label label-success">Publish</span>
                    @elseif ($article->status == 'unpublish')
                    <span class="label label-danger">Unpublish</span>
                    @endif
                </li>
                @endforeach
            </ul>
            <a href='{{ url('admin/article') }}'>Voir tous les articles</a>
        </div>
        <h3>Gestion des &eacute;l&egrave;ves</h3>
        <div>
            <h4>Les derniers &eacute;l&egrave;ves</h4>
            <ul>
                @foreach ($eleves as $eleve)
                <li><a href="{{ url('admin/eleve/'.$eleve->id) }}">{{ $eleve->username }}</a> <span style="font-size:0.8em;font-style: italic;">
                    @if ($eleve->role == 'first_class')
                    premi&egrave;re
                    @elseif ($eleve->role == 'final_class')
                    terminale
                    @endif
                    </span>
                </li>
                @endforeach
            </ul>
            <a href='{{ url('admin/eleve') }}'>Voir tous les &eacute;l&egrave;ves</a>
        </div>
    </div>
    <div id="statistiques">
        <h3>Statistiques</h3>
        <?php 
            $nbr_comments = DB::table('comments')->count();
            $nbr_questions = DB::table('questions')->count();
            $nbr_eleves = DB::table('users')->whereIn('role', array('first_class', 'final_class'))->count();
            ?>
        <ul>
            <li>{{ HTML::image('assets/img/commentaires.jpg', 'Commentaires') }} {{ $nbr_comments }} commentaires</li>
            <li><span class="glyphicon glyphicon-user" aria-hidden="true"></span> {{ $nbr_questions }} fiches publi&eacute;es</li>
            <li><span class="glyphicon glyphicon-user" aria-hidden="true"></span><span class="glyphicon glyphicon-user" aria-hidden="true"></span> {{ $nbr_eleves }} &eacute;l&egrave;ves</li>
        </ul>
    </div>
</main>
<script>
    $(function() {
        $("#accordion").accordion();
    });
</script>
@stop