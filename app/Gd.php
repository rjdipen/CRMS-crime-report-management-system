<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gd extends Model
{
    protected $table = 'generaldairy';
    protected $primaryKey = 'generaldairyID';
    protected $fillable = ['name','fName','mName','subject','nid','presentAddress','permanentAddress','cDescription',
        'aName','mobile','email','completeDate','status','policeStationID','id'];

    public function user()
    {
        return $this->belongsTo('App\User', 'id');
    }
    public function policeStation()
    {
        return $this->belongsTo('App\PoliceStation', 'policeStationID');
    }
}
