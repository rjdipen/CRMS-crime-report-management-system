<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MostWanted extends Model
{
    protected $table = 'mostwanted';
    protected $primaryKey = 'mostwantedID';
    protected $fillable = ['name','age','height','weight','bodyColor','hairColor','prizeMoney'
        ,'contact','description','status','completedDate','tag','genderID','crimeTypeID','policeStationID','id'];

    public function crimeType()
    {
        return $this->belongsTo('App\CrimeType', 'crimeTypeID');
    }
    public function user()
    {
        return $this->belongsTo('App\User', 'id');
    }

    public function gender()
    {
        return $this->belongsTo('App\Gender', 'genderID');
    }

    public function policeStation()
    {
        return $this->belongsTo('App\PoliceStation', 'policeStationID');
    }

    public function scopeSearch($query, $s){
        return $query->where('name','like','%'.$s.'%')
            ->orWhere('tag','like','%'.$s.'%')
            ->orWhere('bodyColor','like','%'.$s.'%')
            ->orWhere('hairColor','like','%'.$s.'%')
            ->orWhere('description','like','%'.$s.'%');
    }
}
