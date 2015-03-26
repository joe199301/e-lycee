<?php

class PostTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('posts')->insert(
                array(
                    array(
                        'id' => 1,
                        'user_id' => 1,
                        'title' => 'Article 1',
                        'abstract' => 'ok',
                        'content' => 'Lune des caract�ristiques qui font lidentit� du lyc�e Turgot r�side dans la volont� constante de sa communaut� �ducative doffrir aux �l�ves qui lui sont confi�s des conditions daccueil et de vivre ensemble favorisant simultan�ment leur �panouissement personnel et leur r�ussite scolaire.Cet axe fort de laction commune se traduit notamment par des activit�s � caract�re �ducatif et culturel qui vous sont pr�sent�es dans cette rubrique.Plusieurs entr�es vous sont offertes : les unes concernent des actions qui sincrivent dans la dur�e et font lobjet dune rubrique � part enti�re, les autres ont un caract�re plus ponctuel et sont regroup�es sous la rubrique Tous azimuts.Bonne d�couverte!',
                        'url_thumbnail' => 'http://www.online-image-editor.com//styles/2014/images/example_image.png',
                        'date' => '01/02/2015',
                        'status' => 'publish'
                    ),
                    array(
                        'id' => 2,
                        'user_id' => 2,
                        'title' => 'Article 2',
                        'abstract' => 'ok',
                        'content' => 'Lune des caract�ristiques qui font lidentit� du lyc�e Turgot r�side dans la volont� constante de sa communaut� �ducative doffrir aux �l�ves qui lui sont confi�s des conditions daccueil et de vivre ensemble favorisant simultan�ment leur �panouissement personnel et leur r�ussite scolaire.Cet axe fort de laction commune se traduit notamment par des activit�s � caract�re �ducatif et culturel qui vous sont pr�sent�es dans cette rubrique.Plusieurs entr�es vous sont offertes : les unes concernent des actions qui sincrivent dans la dur�e et font lobjet dune rubrique � part enti�re, les autres ont un caract�re plus ponctuel et sont regroup�es sous la rubrique Tous azimuts.Bonne d�couverte!',
                        'url_thumbnail' => 'http://www.online-image-editor.com//styles/2014/images/example_image.png',
                        'date' => '02/02/2015',
                        'status' => 'publish'
                    ),
                    array(
                        'id' => 3,
                        'user_id' => 3,
                        'title' => 'Article 3',
                        'abstract' => 'ok',
                        'content' => 'Lune des caract�ristiques qui font lidentit� du lyc�e Turgot r�side dans la volont� constante de sa communaut� �ducative doffrir aux �l�ves qui lui sont confi�s des conditions daccueil et de vivre ensemble favorisant simultan�ment leur �panouissement personnel et leur r�ussite scolaire.Cet axe fort de laction commune se traduit notamment par des activit�s � caract�re �ducatif et culturel qui vous sont pr�sent�es dans cette rubrique.Plusieurs entr�es vous sont offertes : les unes concernent des actions qui sincrivent dans la dur�e et font lobjet dune rubrique � part enti�re, les autres ont un caract�re plus ponctuel et sont regroup�es sous la rubrique Tous azimuts.Bonne d�couverte!',
                        'url_thumbnail' => 'http://www.online-image-editor.com//styles/2014/images/example_image.png',
                        'date' => '03/02/2015',
                        'status' => 'unpublish'
                    ),
                    array(
                        'id' => 4,
                        'user_id' => 1,
                        'title' => 'Article 4',
                        'abstract' => 'ok',
                        'content' => 'Lune des caract�ristiques qui font lidentit� du lyc�e Turgot r�side dans la volont� constante de sa communaut� �ducative doffrir aux �l�ves qui lui sont confi�s des conditions daccueil et de vivre ensemble favorisant simultan�ment leur �panouissement personnel et leur r�ussite scolaire.Cet axe fort de laction commune se traduit notamment par des activit�s � caract�re �ducatif et culturel qui vous sont pr�sent�es dans cette rubrique.Plusieurs entr�es vous sont offertes : les unes concernent des actions qui sincrivent dans la dur�e et font lobjet dune rubrique � part enti�re, les autres ont un caract�re plus ponctuel et sont regroup�es sous la rubrique Tous azimuts.Bonne d�couverte!',
                        'url_thumbnail' => 'http://www.online-image-editor.com//styles/2014/images/example_image.png',
                        'date' => '04/02/2015',
                        'status' => 'unpublish'
                    ),
                    array(
                        'id' => 5,
                        'user_id' => 2,
                        'title' => 'Article 5',
                        'abstract' => 'ok',
                        'content' => 'Lune des caract�ristiques qui font lidentit� du lyc�e Turgot r�side dans la volont� constante de sa communaut� �ducative doffrir aux �l�ves qui lui sont confi�s des conditions daccueil et de vivre ensemble favorisant simultan�ment leur �panouissement personnel et leur r�ussite scolaire.Cet axe fort de laction commune se traduit notamment par des activit�s � caract�re �ducatif et culturel qui vous sont pr�sent�es dans cette rubrique.Plusieurs entr�es vous sont offertes : les unes concernent des actions qui sincrivent dans la dur�e et font lobjet dune rubrique � part enti�re, les autres ont un caract�re plus ponctuel et sont regroup�es sous la rubrique Tous azimuts.Bonne d�couverte!',
                        'url_thumbnail' => 'http://www.online-image-editor.com//styles/2014/images/example_image.png',
                        'date' => '05/02/2015',
                        'status' => 'actif'
                    ),
                    array(
                        'id' => 6,
                        'user_id' => 3,
                        'title' => 'Article 6',
                        'abstract' => 'ok',
                        'content' => 'Lune des caract�ristiques qui font lidentit� du lyc�e Turgot r�side dans la volont� constante de sa communaut� �ducative doffrir aux �l�ves qui lui sont confi�s des conditions daccueil et de vivre ensemble favorisant simultan�ment leur �panouissement personnel et leur r�ussite scolaire.Cet axe fort de laction commune se traduit notamment par des activit�s � caract�re �ducatif et culturel qui vous sont pr�sent�es dans cette rubrique.Plusieurs entr�es vous sont offertes : les unes concernent des actions qui sincrivent dans la dur�e et font lobjet dune rubrique � part enti�re, les autres ont un caract�re plus ponctuel et sont regroup�es sous la rubrique Tous azimuts.Bonne d�couverte!',
                        'url_thumbnail' => 'http://www.online-image-editor.com//styles/2014/images/example_image.png',
                        'date' => '06/02/2015',
                        'status' => 'publish'
                    )
                )
        );
    }

}
