<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MissingPerson extends Model
{
    protected $table = 'missingperson';
    protected $primaryKey = 'missingPersonID';
    protected $fillable = ['name','age','height','weight','bodyColor','hairColor','clothes','missingDate','status','completedDate'
        ,'contact','description','tag','genderID','divisionID','policeStationID'.'completeDate','id'];

    public function user()
    {
        return $this->belongsTo('App\User', 'id');
    }
    public function division()
    {
        return $this->belongsTo('App\Division', 'divisionID');
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
            ->orWhere('description','like','%'.$s.'%')
            ->orWhere('contact','like','%'.$s.'%')
            ->orWhere('hairColor','like','%'.$s.'%')
            ->orWhere('clothes','like','%'.$s.'%')
            ->orWhere('bodyColor','like','%'.$s.'%');
    }








}
