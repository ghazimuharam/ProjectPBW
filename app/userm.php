<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userm extends Model
{
    protected $table = "userms";
    protected $fillable = ['nama','role','status'];
}
