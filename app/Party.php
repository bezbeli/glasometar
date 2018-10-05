<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
    //
    public function answers()
    {
        return $this->hasMany('App\Answer', 'code', 'code');
    }

    public function results()
    {
        return $this->hasMany('App\PartyResult', 'code', 'code');
    }

    public function questions()
    {
        return $this->hasManyThrough('App\Question', 'App\Answer', 'question_id', 'id');
    }
}
