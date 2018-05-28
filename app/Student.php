<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name','surname','patronymic','year','from','country','faculty','course','phone','mail','place','payment'];

    public function places()
    {
        return $this->belongsToMany(Place::class,'student_places');
    }

}
