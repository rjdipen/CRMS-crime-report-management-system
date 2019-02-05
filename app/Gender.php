<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    protected $table = 'gender';
    protected $primaryKey = 'genderID';
    protected $fillable = ['name'];
}
