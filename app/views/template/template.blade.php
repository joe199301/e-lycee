<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>E-lycee</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" >
        {{ HTML::style('assets/css/bootstrap.min.css') }}
        {{ HTML::style('assets/css/bootstrap-responsive.min.css') }}
        {{ HTML::style('assets/css/style.css') }}
        {{ HTML::style('http://fonts.googleapis.com/css?family=Imprima') }}
    </head>

    <body>

        <div id='wrapper'>
            <section id="top">
                <div id="rs1">
                    {{ HTML::image('assets/img/facebook.png', 'facebook') }}
                    {{ HTML::image('assets/img/tweeter.png', 'tweeter') }}
                </div>
                <div id='connexion'>
                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                    <a href='{{ url('connexion') }}'>Connectez-vous</a>
                </div>
                <div style="clear:both;"></div>
            </section>
            <header id="header">
                <h1><span>E</span>-lycee</h1>
            </header>
            <nav id="nav">
                <ul>
                    @yield('navigation')
                </ul>
                <div id='recherche'>
                    {{ Form::open(array('url' => 'find', 'method' => 'POST', 'id' => 'form_recherche')) }}
                    {{ Form::text('recherche', '') }}
                    {{ Form::submit(' ')}}
                    {{ Form::close() }}
                </div>
                <div style="clear:both;"></div>
            </nav>
            <section id="content">
                @yield('content')
            </section>
            @yield('aside')
            <div style="clear:both;"></div>
            <footer id="footer">
                <a href="{{ url('mentions') }}">Mentions l&eacute;gales</a>
                |
                <a href="{{ url('contact') }}">Contact</a>
            </footer>
        </div>
    </body>
</html>