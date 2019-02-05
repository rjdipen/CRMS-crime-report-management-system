<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GoodsCategory extends Model
{
    protected $table = 'goodscategory';
    protected $primaryKey = 'goodsCategoryID';
    protected $fillable = ['name'];

    public function sub_category()
    {
        return $this->hasMany('App\GoodsSubcategory', 'goodsCategoryID');
    }
}
