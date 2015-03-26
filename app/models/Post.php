<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Post extends Eloquent {

     public function users()
    {
        return $this->belongsTo('user'); 
    }
     
    public function posts() {
        return $this->hasMany('post');
    }
}