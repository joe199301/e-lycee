@section('navigation')
 
{{Request::is('/')? '<li class="active"><a href="'.url('/').'">Home</a></li>' : '<li><a href="'.url('/').'">Home</a></li>'}}
{{Request::is('actus')? '<li class="active"><a href="'.url('actus').'">Actus</a></li>' : '<li><a href="'.url('actus').'">Actus</a></li>'}}
{{Request::is('lycee')? '<li class="active"><a href="'.url('lycee').'">Le lyc&eacute;e</a></li>' : '<li><a href="'.url('lycee').'">Le lyc&eacute;e</a></li>'}}
 
@stop