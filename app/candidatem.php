<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class candidatem extends Model
{
    protected $table = "candidatems";
    protected $fillable = ['nama','foto','bio'];
}
