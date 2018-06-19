<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClickCounter extends Model
{
    protected $fillable = ['visitor', 'counts'];
}
