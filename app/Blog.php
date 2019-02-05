<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blog';
    protected $primaryKey = 'blogID';
    protected $fillable = ['blogCategoryID','title','description','id'];

    public function blog_cat(){
        return $this->belongsTo('App\BlogCategory','blogCategoryID');
    }
    public function user(){
        return $this->belongsTo('App\User','id');
    }

    public function scopeSearch($query, $s){
        return $query->where('title','like','%'.$s.'%')
            ->orWhere('description','like','%'.$s.'%');
    }
}
