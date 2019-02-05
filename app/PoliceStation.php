<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PoliceStation extends Model
{
    protected $table = 'policestation';
    protected $primaryKey = 'policeStationID';
    protected $fillable = ['name','address'];
}
