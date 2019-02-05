<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    protected $table = 'blogcategory';
    protected $primaryKey = 'blogCategoryID';
    protected $fillable = ['name'];

    public function countPost($id){
        $table = Blog::where('blogCategoryID', $id)->count();
        return $table;
    }
}
