<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CrimeType extends Model
{
    protected $table = 'crimetype';
    protected $primaryKey = 'crimeTypeID';
    protected $fillable = ['name'];
}
