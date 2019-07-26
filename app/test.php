<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class test extends Model
{
    use SoftDeletes;
    protected $table='vanbandi';
    public $timestamps='false';
}
