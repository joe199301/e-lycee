<html>
<head>
<meta charset="utf-8">
<title>{{$title or "Blog laravel"}}</title>
<link rel="stylesheet" href="{{asset('dist/css/bootstrap.css')}}"/>
<link rel="stylesheet" href="{{asset('dist/css/mystyle.css')}}"/>
<script src="{{asset('dist/js/jquery-2.0.3.min.js')}}"></script>
</head>
<body>
<div class="container navigation">
<div class="row navigation">
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
<ol class="breadcrumb">
<li><a href="{{url('/contact')}}">F j'aime<span class="">2</span></a></li>
</ol>

<div class="navbar-collapse collapse navbar-right">
@if(Auth::check())
<div class="input-prepend">
<div class="btn-group">
<button class="btn dropdown-toggle" data-toggle="dropdown">
<span class="glyphicon glyphicon-align-justify"></span>
<span class="caret"></span>
</button>
<ul class="dropdown-menu">
<li class="text-center"><a href="{{url('users/'.Auth::id())}}"><span
class="glyphicon glyphicon-user"></span>user</a>
</li>
<li class="text-center"><a href="{{url('/logout')}}"><span
class="glyphicon glyphicon-off text-center"></span>Logout</a>
</li>
</ul>
</div>
</div>
@else
<ul class="nav navbar-nav">
<li><a href="{{url('/login')}}"><span class="glyphicon glyphicon-user"></span> </a></li>
<li><a href="{{url('/login')}}">connectez-vous</a></li>
<li><a href="">f</a></li>
<li><a href="">t</a></li>

</ul>
@endif

</div>
</nav>

</div>

<!-- row navigation -->
</div>
<nav class="navbar navbar-default">
<ul class="nav nav-tabs nav-justified">

{{Request::is('/')? '<li class="active"><a href="'.url('/').'">HOME</a></li>' : '<li><a href="'.url('/').'">Home</a></li>'}}
{{Request::is('actus')? '<li class="active"><a href="'.url('actus').'">Actus</a></li>' : '<li><a href="'.url('actus').'">Actus</a></li>'}}
{{Request::is('lycee')? '<li class="active"><a href="'.url('lycee').'">Le lycée</a></li>' : '<li><a href="'.url('lycee').'">Le lycée</a></li>'}}

<li>
<form action="" id="search">
{{Form::text('search', null, ['placeholder'=>'search'])}}
</form>
<a id="icon-search" class="glyphicon glyphicon-search"></a>

</li>
<li><a href="">>></a></li>
</ul>
</nav>
<!-- container navigation -->