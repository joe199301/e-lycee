<?php

class CommentTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('comments')->insert(
                array(
                    array(
                        'id' => 1,
                        'post_id' => 1,
                        'title' => 'Comment 1',
                        'content' => 'Je suis le commentaire et je suis la pour dire ce que jai dire ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok',
                        'date' => '01/02/2015',
                        'status' => 'publish'
                    ),
                    array(
                        'id' => 2,
                        'post_id' => 1,
                        'title' => 'Comment 1',
                        'content' => 'Je suis le commentaire et je suis la pour dire ce que jai dire ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok',
                        'date' => '01/02/2015',
                        'status' => 'publish'
                    ),
                    array(
                        'id' => 3,
                        'post_id' => 1,
                        'title' => 'Comment 1',
                        'content' => 'Je suis le commentaire et je suis la pour dire ce que jai dire ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok',
                        'date' => '01/02/2015',
                        'status' => 'publish'
                    ),
                    array(
                        'id' => 4,
                        'post_id' => 1,
                        'title' => 'Comment 1',
                        'content' => 'Je suis le commentaire et je suis la pour dire ce que jai dire ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok',
                        'date' => '01/02/2015',
                        'status' => 'unpublish'
                    ),
                    array(
                        'id' => 5,
                        'post_id' => 1,
                        'title' => 'Comment 1',
                        'content' => 'Je suis le commentaire et je suis la pour dire ce que jai dire ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok',
                        'date' => '01/02/2015',
                        'status' => 'publish'
                    ),
                    array(
                        'id' => 6,
                        'post_id' => 2,
                        'title' => 'Comment 1',
                        'content' => 'Je suis le commentaire et je suis la pour dire ce que jai dire ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok',
                        'date' => '01/02/2015',
                        'status' => 'publish'
                    ),
                    array(
                        'id' => 7,
                        'post_id' => 2,
                        'title' => 'Comment 1',
                        'content' => 'Je suis le commentaire et je suis la pour dire ce que jai dire ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok',
                        'date' => '01/02/2015',
                        'status' => 'publish'
                    ),
                    array(
                        'id' => 8,
                        'post_id' => 2,
                        'title' => 'Comment 1',
                        'content' => 'Je suis le commentaire et je suis la pour dire ce que jai dire ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok',
                        'date' => '01/02/2015',
                        'status' => 'publish'
                    ),
                    array(
                        'id' => 9,
                        'post_id' => 2,
                        'title' => 'Comment 1',
                        'content' => 'Je suis le commentaire et je suis la pour dire ce que jai dire ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok',
                        'date' => '01/02/2015',
                        'status' => 'publish'
                    ),
                    array(
                        'id' => 10,
                        'post_id' => 2,
                        'title' => 'Comment 1',
                        'content' => 'Je suis le commentaire et je suis la pour dire ce que jai dire ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok',
                        'date' => '01/02/2015',
                        'status' => 'publish'
                    ),
                    array(
                        'id' => 11,
                        'post_id' => 2,
                        'title' => 'Comment 1',
                        'content' => 'Je suis le commentaire et je suis la pour dire ce que jai dire ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok',
                        'date' => '01/02/2015',
                        'status' => 'publish'
                    ),
                    array(
                        'id' => 12,
                        'post_id' => 2,
                        'title' => 'Comment 1',
                        'content' => 'Je suis le commentaire et je suis la pour dire ce que jai dire ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok',
                        'date' => '01/02/2015',
                        'status' => 'publish'
                    ),
                    array(
                        'id' => 13,
                        'post_id' => 3,
                        'title' => 'Comment 1',
                        'content' => 'Je suis le commentaire et je suis la pour dire ce que jai dire ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok',
                        'date' => '01/02/2015',
                        'status' => 'publish'
                    ),
                    array(
                        'id' => 14,
                        'post_id' => 3,
                        'title' => 'Comment 1',
                        'content' => 'Je suis le commentaire et je suis la pour dire ce que jai dire ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok',
                        'date' => '01/02/2015',
                        'status' => 'publish'
                    ),
                    array(
                        'id' => 15,
                        'post_id' => 3,
                        'title' => 'Comment 1',
                        'content' => 'Je suis le commentaire et je suis la pour dire ce que jai dire ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok',
                        'date' => '01/02/2015',
                        'status' => 'publish'
                    ),
                    array(
                        'id' => 16,
                        'post_id' => 3,
                        'title' => 'Comment 1',
                        'content' => 'Je suis le commentaire et je suis la pour dire ce que jai dire ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok',
                        'date' => '01/02/2015',
                        'status' => 'publish'
                    ),
                    array(
                        'id' => 17,
                        'post_id' => 3,
                        'title' => 'Comment 1',
                        'content' => 'Je suis le commentaire et je suis la pour dire ce que jai dire ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok',
                        'date' => '01/02/2015',
                        'status' => 'publish'
                    ),
                    array(
                        'id' => 18,
                        'post_id' => 3,
                        'title' => 'Comment 1',
                        'content' => 'Je suis le commentaire et je suis la pour dire ce que jai dire ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok',
                        'date' => '01/02/2015',
                        'status' => 'publish'
                    ),
                    array(
                        'id' => 19,
                        'post_id' => 3,
                        'title' => 'Comment 1',
                        'content' => 'Je suis le commentaire et je suis la pour dire ce que jai dire ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok',
                        'date' => '01/02/2015',
                        'status' => 'publish'
                    ),
                    array(
                        'id' => 20,
                        'post_id' => 4,
                        'title' => 'Comment 1',
                        'content' => 'Je suis le commentaire et je suis la pour dire ce que jai dire ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok',
                        'date' => '01/02/2015',
                        'status' => 'publish'
                    ),
                    array(
                        'id' => 21,
                        'post_id' => 4,
                        'title' => 'Comment 1',
                        'content' => 'Je suis le commentaire et je suis la pour dire ce que jai dire ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok',
                        'date' => '01/02/2015',
                        'status' => 'publish'
                    ),
                    array(
                        'id' => 22,
                        'post_id' => 4,
                        'title' => 'Comment 1',
                        'content' => 'Je suis le commentaire et je suis la pour dire ce que jai dire ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok',
                        'date' => '01/02/2015',
                        'status' => 'publish'
                    ),
                    array(
                        'id' => 23,
                        'post_id' => 4,
                        'title' => 'Comment 1',
                        'content' => 'Je suis le commentaire et je suis la pour dire ce que jai dire ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok',
                        'date' => '01/02/2015',
                        'status' => 'publish'
                    ),
                    array(
                        'id' => 24,
                        'post_id' => 4,
                        'title' => 'Comment 1',
                        'content' => 'Je suis le commentaire et je suis la pour dire ce que jai dire ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok',
                        'date' => '01/02/2015',
                        'status' => 'publish'
                    ),
                    array(
                        'id' => 25,
                        'post_id' => 4,
                        'title' => 'Comment 1',
                        'content' => 'Je suis le commentaire et je suis la pour dire ce que jai dire ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok',
                        'date' => '01/02/2015',
                        'status' => 'publish'
                    ),
                    array(
                        'id' => 26,
                        'post_id' => 5,
                        'title' => 'Comment 1',
                        'content' => 'Je suis le commentaire et je suis la pour dire ce que jai dire ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok',
                        'date' => '01/02/2015',
                        'status' => 'publish'
                    ),
                    array(
                        'id' => 27,
                        'post_id' => 5,
                        'title' => 'Comment 1',
                        'content' => 'Je suis le commentaire et je suis la pour dire ce que jai dire ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok',
                        'date' => '01/02/2015',
                        'status' => 'publish'
                    ),
                    array(
                        'id' => 28,
                        'post_id' => 5,
                        'title' => 'Comment 1',
                        'content' => 'Je suis le commentaire et je suis la pour dire ce que jai dire ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok',
                        'date' => '01/02/2015',
                        'status' => 'publish'
                    ),
                    array(
                        'id' => 29,
                        'post_id' => 5,
                        'title' => 'Comment 1',
                        'content' => 'Je suis le commentaire et je suis la pour dire ce que jai dire ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok',
                        'date' => '01/02/2015',
                        'status' => 'publish'
                    ),
                    array(
                        'id' => 30,
                        'post_id' => 5,
                        'title' => 'Comment 1',
                        'content' => 'Je suis le commentaire et je suis la pour dire ce que jai dire ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok',
                        'date' => '01/02/2015',
                        'status' => 'publish'
                    ),
                    array(
                        'id' => 31,
                        'post_id' => 5,
                        'title' => 'Comment 1',
                        'content' => 'Je suis le commentaire et je suis la pour dire ce que jai dire ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok',
                        'date' => '01/02/2015',
                        'status' => 'publish'
                    ),
                    array(
                        'id' => 32,
                        'post_id' => 6,
                        'title' => 'Comment 1',
                        'content' => 'Je suis le commentaire et je suis la pour dire ce que jai dire ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok',
                        'date' => '01/02/2015',
                        'status' => 'publish'
                    ),
                    array(
                        'id' => 33,
                        'post_id' => 6,
                        'title' => 'Comment 1',
                        'content' => 'Je suis le commentaire et je suis la pour dire ce que jai dire ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok',
                        'date' => '01/02/2015',
                        'status' => 'publish'
                    ),
                    array(
                        'id' => 34,
                        'post_id' => 6,
                        'title' => 'Comment 1',
                        'content' => 'Je suis le commentaire et je suis la pour dire ce que jai dire ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok',
                        'date' => '01/02/2015',
                        'status' => 'publish'
                    ),
                    array(
                        'id' => 35,
                        'post_id' => 1,
                        'title' => 'Comment 1',
                        'content' => 'Je suis le commentaire et je suis la pour dire ce que jai dire ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok ok',
                        'date' => '01/02/2015',
                        'status' => 'publish'
                    )
                )
        );
    }

}
