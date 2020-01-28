<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
      protected $fillable=
    [
        'mentor_title',
        'mentor_name',
        'mentor_email',
        'mentor_description'
        ];
}
