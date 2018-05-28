<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use User;
class Phone extends Model
{
    protected $fillable = ['name','number','dormitory_number'];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
