<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GoodsSubcategory extends Model
{
    protected $table = 'Goodssubcategory';
    protected $primaryKey = 'goodsSubcategoryID';
    protected $fillable = ['name','goodsCategoryID'];

    public function category()
    {
        return $this->belongsTo('App\GoodsCategory', 'goodsCategoryID');
    }
}
