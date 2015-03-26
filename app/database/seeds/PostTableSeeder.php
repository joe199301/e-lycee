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
                        'content' => 'Lune des caractéristiques qui font lidentité du lycée Turgot réside dans la volonté constante de sa communauté éducative doffrir aux élèves qui lui sont confiés des conditions daccueil et de vivre ensemble favorisant simultanément leur épanouissement personnel et leur réussite scolaire.Cet axe fort de laction commune se traduit notamment par des activités à caractère éducatif et culturel qui vous sont présentées dans cette rubrique.Plusieurs entrées vous sont offertes : les unes concernent des actions qui sincrivent dans la durée et font lobjet dune rubrique à part entière, les autres ont un caractère plus ponctuel et sont regroupées sous la rubrique Tous azimuts.Bonne découverte!',
                        'url_thumbnail' => 'http://www.online-image-editor.com//styles/2014/images/example_image.png',
                        'date' => '01/02/2015',
                        'status' => 'publish'
                    ),
                    array(
                        'id' => 2,
                        'user_id' => 2,
                        'title' => 'Article 2',
                        'abstract' => 'ok',
                        'content' => 'Lune des caractéristiques qui font lidentité du lycée Turgot réside dans la volonté constante de sa communauté éducative doffrir aux élèves qui lui sont confiés des conditions daccueil et de vivre ensemble favorisant simultanément leur épanouissement personnel et leur réussite scolaire.Cet axe fort de laction commune se traduit notamment par des activités à caractère éducatif et culturel qui vous sont présentées dans cette rubrique.Plusieurs entrées vous sont offertes : les unes concernent des actions qui sincrivent dans la durée et font lobjet dune rubrique à part entière, les autres ont un caractère plus ponctuel et sont regroupées sous la rubrique Tous azimuts.Bonne découverte!',
                        'url_thumbnail' => 'http://www.online-image-editor.com//styles/2014/images/example_image.png',
                        'date' => '02/02/2015',
                        'status' => 'publish'
                    ),
                    array(
                        'id' => 3,
                        'user_id' => 3,
                        'title' => 'Article 3',
                        'abstract' => 'ok',
                        'content' => 'Lune des caractéristiques qui font lidentité du lycée Turgot réside dans la volonté constante de sa communauté éducative doffrir aux élèves qui lui sont confiés des conditions daccueil et de vivre ensemble favorisant simultanément leur épanouissement personnel et leur réussite scolaire.Cet axe fort de laction commune se traduit notamment par des activités à caractère éducatif et culturel qui vous sont présentées dans cette rubrique.Plusieurs entrées vous sont offertes : les unes concernent des actions qui sincrivent dans la durée et font lobjet dune rubrique à part entière, les autres ont un caractère plus ponctuel et sont regroupées sous la rubrique Tous azimuts.Bonne découverte!',
                        'url_thumbnail' => 'http://www.online-image-editor.com//styles/2014/images/example_image.png',
                        'date' => '03/02/2015',
                        'status' => 'unpublish'
                    ),
                    array(
                        'id' => 4,
                        'user_id' => 1,
                        'title' => 'Article 4',
                        'abstract' => 'ok',
                        'content' => 'Lune des caractéristiques qui font lidentité du lycée Turgot réside dans la volonté constante de sa communauté éducative doffrir aux élèves qui lui sont confiés des conditions daccueil et de vivre ensemble favorisant simultanément leur épanouissement personnel et leur réussite scolaire.Cet axe fort de laction commune se traduit notamment par des activités à caractère éducatif et culturel qui vous sont présentées dans cette rubrique.Plusieurs entrées vous sont offertes : les unes concernent des actions qui sincrivent dans la durée et font lobjet dune rubrique à part entière, les autres ont un caractère plus ponctuel et sont regroupées sous la rubrique Tous azimuts.Bonne découverte!',
                        'url_thumbnail' => 'http://www.online-image-editor.com//styles/2014/images/example_image.png',
                        'date' => '04/02/2015',
                        'status' => 'unpublish'
                    ),
                    array(
                        'id' => 5,
                        'user_id' => 2,
                        'title' => 'Article 5',
                        'abstract' => 'ok',
                        'content' => 'Lune des caractéristiques qui font lidentité du lycée Turgot réside dans la volonté constante de sa communauté éducative doffrir aux élèves qui lui sont confiés des conditions daccueil et de vivre ensemble favorisant simultanément leur épanouissement personnel et leur réussite scolaire.Cet axe fort de laction commune se traduit notamment par des activités à caractère éducatif et culturel qui vous sont présentées dans cette rubrique.Plusieurs entrées vous sont offertes : les unes concernent des actions qui sincrivent dans la durée et font lobjet dune rubrique à part entière, les autres ont un caractère plus ponctuel et sont regroupées sous la rubrique Tous azimuts.Bonne découverte!',
                        'url_thumbnail' => 'http://www.online-image-editor.com//styles/2014/images/example_image.png',
                        'date' => '05/02/2015',
                        'status' => 'actif'
                    ),
                    array(
                        'id' => 6,
                        'user_id' => 3,
                        'title' => 'Article 6',
                        'abstract' => 'ok',
                        'content' => 'Lune des caractéristiques qui font lidentité du lycée Turgot réside dans la volonté constante de sa communauté éducative doffrir aux élèves qui lui sont confiés des conditions daccueil et de vivre ensemble favorisant simultanément leur épanouissement personnel et leur réussite scolaire.Cet axe fort de laction commune se traduit notamment par des activités à caractère éducatif et culturel qui vous sont présentées dans cette rubrique.Plusieurs entrées vous sont offertes : les unes concernent des actions qui sincrivent dans la durée et font lobjet dune rubrique à part entière, les autres ont un caractère plus ponctuel et sont regroupées sous la rubrique Tous azimuts.Bonne découverte!',
                        'url_thumbnail' => 'http://www.online-image-editor.com//styles/2014/images/example_image.png',
                        'date' => '06/02/2015',
                        'status' => 'publish'
                    )
                )
        );
    }

}
