<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $fillable = ['number','count','floor','dormitory_number','type','busy'];

    public function students()
    {
        return $this->belongsToMany(Student::class,'student_places');
    }

    public function setCount()
    {
        $this->attributes['busy'] = +1;
    }
}
