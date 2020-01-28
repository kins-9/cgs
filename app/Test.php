<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $fillable=
    [
        'question',
        'option_a',
        'option_b',
        'option_c',
        'option_d',
        'answer'
    ];
}
