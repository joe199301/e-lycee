@section('navigation_admin')
 
{{Request::is('admin/accueil')? '<li class="active"><a href="'.url('admin/accueil').'">Dashboard</a></li>' : '<li><a href="'.url('admin/accueil').'">Dashboard</a></li>'}}
{{Request::is('admin/fiche')? '<li class="active"><a href="'.url('admin/fiche').'">Fiches</a></li>' : '<li><a href="'.url('admin/fiche').'">Fiches</a></li>'}}
{{Request::is('admin/article')? '<li class="active"><a href="'.url('admin/article').'">Articles</a></li>' : '<li><a href="'.url('admin/article').'">Articles</a></li>'}}
{{Request::is('admin/comment')? '<li class="active"><a href="'.url('admin/comment').'">Comments</a></li>' : '<li><a href="'.url('admin/comment').'">Comments</a></li>'}}
{{Request::is('admin/eleve')? '<li class="active"><a href="'.url('admin/eleve').'">El&egrave;ves</a></li>' : '<li><a href="'.url('admin/eleve').'">El&egrave;ves</a></li>'}}

@stop