<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidatem extends Model
{
    protected $fillable = ['nama','foto','bio','total_vote'];
}
