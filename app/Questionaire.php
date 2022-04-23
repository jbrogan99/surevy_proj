<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questionaire extends Model
{
    protected $fillable = [
        'title',
        'id'
    ];

    public function questions()
    {
        return $this->hasMany('App\Question');
    }
}
