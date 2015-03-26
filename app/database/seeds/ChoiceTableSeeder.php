<?php

class ChoiceTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('choices')->insert(
                array(
                    array(
                        'id' => 1,
                        'question_id' => 1,
                        'choice_id' => 1,
                        'content' => 'Contenu 1',
                        'status' => 'yes'
                    ),
                    array(
                        'id' => 2,
                        'question_id' => 1,
                        'choice_id' => 2,
                        'content' => 'Contenu 2',
                        'status' => 'no'
                    ),
                    array(
                        'id' => 3,
                        'question_id' => 2,
                        'choice_id' => 1,
                        'content' => 'Contenu 3',
                        'status' => 'yes'
                    ),
                    array(
                        'id' => 4,
                        'question_id' => 2,
                        'choice_id' => 2,
                        'content' => 'Contenu 4',
                        'status' => 'no'
                    ),
                    array(
                        'id' => 5,
                        'question_id' => 3,
                        'choice_id' => 1,
                        'content' => 'Contenu 5',
                        'status' => 'yes'
                    ),
                    array(
                        'id' => 6,
                        'question_id' => 3,
                        'choice_id' => 2,
                        'content' => 'Contenu 6',
                        'status' => 'no'
                    ),
                    array(
                        'id' => 7,
                        'question_id' => 3,
                        'choice_id' => 3,
                        'content' => 'Contenu 7',
                        'status' => 'yes'
                    ),
                )
        );
    }

}
