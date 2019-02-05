<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comment';
    protected $primaryKey = 'commentID';
    protected $fillable = ['description','blogID','id'];

    public function blog()
    {
        return $this->belongsTo('App\Blog', 'blogID');
    }
}
