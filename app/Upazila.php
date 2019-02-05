<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upazila extends Model
{
    protected $table = 'upazila';
    protected $primaryKey = 'upazilaID';
    protected $fillable = ['name','zilaID'];

    public function zila()
    {
        return $this->belongsTo('App\Zila', 'zilaID');
    }
}
