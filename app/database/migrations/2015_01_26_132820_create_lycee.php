<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLycee extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('users', function($table) {
            $table->increments('id')->unsigned();
            $table->string('username', 64)->unique();
            $table->string('password', 64);
            $table->string('role');
            $table->string('remember_token', 255);
        });
        Schema::create('posts', function($table) {
            $table->increments('id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('title');
            $table->string('abstract');
            $table->longtext('content');
            $table->string('url_thumbnail');
            $table->date('date');
            $table->string('status');
        });
        Schema::create('comments', function($table) {
            $table->increments('id')->unsigned();
            $table->integer('post_id')->unsigned();
            $table->foreign('post_id')->references('id')->on('posts');
            $table->string('title');
            $table->longtext('content');
            $table->date('date');
            $table->string('status');
        });
        Schema::create('questions', function($table) {
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->longtext('content');
            $table->date('date');
            $table->string('class_level');
            $table->string('status');
        });
        Schema::create('choices', function($table) {
            $table->increments('id')->unsigned();
            $table->integer('question_id')->unsigned();
            $table->foreign('question_id')->references('id')->on('questions');
            $table->integer('choice_id');
            $table->longtext('content');
            $table->string('status');
        });
        Schema::create('scores', function($table) {
            $table->increments('id')->unsigned();
            $table->integer('user_id');
            $table->integer('question_id');
            $table->string('statut_question');
            $table->integer('note');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('users');    
        Schema::drop('posts');
        Schema::drop('comments');      
        Schema::drop('questions');
        Schema::drop('choices');
        Schema::drop('scores');
    }

}
