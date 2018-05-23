<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistoryStudent extends Model
{
    protected $fillable = ['name','surname','patronymic','place','status'];
}
