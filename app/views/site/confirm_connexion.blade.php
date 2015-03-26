@extends('template.template')

@include('template.navigation')

@section('content')
<p style="text-align:center;color:red;font-weight:bold;">Vous &ecirc;tes maintenant connect&eacute; {{ Auth::user()->username }}</p>
@stop
@include('template.aside')