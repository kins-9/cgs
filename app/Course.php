<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable=
    [
        'course_name',
        'course_description'
        ];
    public function questions(){
        return $this->hasMany(Question::class);
    }
}
