<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fir extends Model
{
    protected $table = 'fir';
    protected $primaryKey = 'firID';
    protected $fillable = ['vName','vfName','vmName','vMobile','vNid','vAge','vPresentAddress','vPermanentAddress',
        'cName','cfName','cMobile','cAge','cPresentAddress','cPermanentAddress','cName1','cfName1','cName2','cfName2',
        'cDate','cLocation','cTime','cDescription','completeDate','status','policeStationID','zilaID','upazilaID',
        'crimeTypeID','id'];

    public function user()
    {
        return $this->belongsTo('App\User', 'id');
    }
    public function zila()
    {
        return $this->belongsTo('App\Zila', 'zilaID');
    }
    public function upaZila()
    {
        return $this->belongsTo('App\Upazila', 'upazilaID');
    }

    public function crimeType()
    {
        return $this->belongsTo('App\CrimeType', 'crimeTypeID');
    }

    public function policeStation()
    {
        return $this->belongsTo('App\PoliceStation', 'policeStationID');
    }
}
