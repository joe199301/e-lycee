@section('aside')

<aside id="aside">
    <h2>A lire aussi</h2>
    <?php 
    $posts_aside = Post::join('users', 'users.id', '=', 'posts.user_id')
                        ->select('posts.id as post_id', 'title')
                        ->orderBy('date', 'desc')->take(5)->get();
    ?>
    <ul>
        @for ($i = 0; $i < 5; $i++)
        <li><a href="{{ url('article/'.$posts_aside[$i]->post_id) }}">{{ $posts_aside[$i]->title }}</a></li>
        @endfor
    </ul>
    {{ HTML::image('assets/img/twitter_block.png', 'tweeter') }}
</aside>
<div style="clear:both;"></div>
@stop