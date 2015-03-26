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
        {{ HTML::style('//code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css') }}
        {{ HTML::script('//code.jquery.com/jquery-1.10.2.js') }}
        {{ HTML::script('//code.jquery.com/ui/1.11.3/jquery-ui.js') }}

    </head>

    <body>

        <div id='wrapper'>
            <section id="top_admin">
                <div id="retour">
                    <a href='{{ url('/') }}'><= Retour au site pulique</a>
                </div>
                <div id='deconnexion'>
                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                    <p>Bonjour {{ Auth::user()->username }}</p>
                    <a href='{{ url('admin/deconnexion') }}'>Se d&eacute;connecter</a>
                </div>
                <div style="clear:both;"></div>
            </section>
            <nav id="nav">
                <ul>
                    @yield('navigation_admin')
                </ul>
            </nav>
            <section id="content_admin">
                @yield('content_admin')
            </section>
            <div style="clear:both;"></div>
        </div>
    </body>
</html>