<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zila extends Model
{
    protected $table = 'zila';
    protected $primaryKey = 'zilaID';
    protected $fillable = ['name','divisionID'];

    public function division()
    {
        return $this->belongsTo('App\Division', 'divisionID');
    }
}
