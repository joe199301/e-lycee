<?php

class QuestionTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('questions')->insert(
                array(
                    array(
                        'id' => 1,
                        'title' => 'Fiche 1',
                        'content' => 'Contenu 1',
                        'date' => '01/02/2015',
                        'class_level' => 'terminale',
                        'status' => 'puplish'
                    ),
                    array(
                        'id' => 2,
                        'title' => 'Fiche 2',
                        'content' => 'Contenu 1',
                        'date' => '02/02/2015',
                        'class_level' => 'premiere',
                        'status' => 'unpuplish'
                    ),
                    array(
                        'id' => 3,
                        'title' => 'Fiche 2',
                        'content' => 'Contenu 1',
                        'date' => '03/02/2015',
                        'class_level' => 'terminale',
                        'status' => 'puplish'
                    ),
                )
        );
    }

}
