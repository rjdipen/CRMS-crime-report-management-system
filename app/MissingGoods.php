<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MissingGoods extends Model
{
    protected $table = 'missinggoods';
    protected $primaryKey = 'missingGoodsID';
    protected $fillable = ['name','imeChessis','lPlace','goodsColor','contact','description','status','missingDate','completeDate',
        'goodsCategoryID','goodsSubcategoryID','policeStationID','tag','id'];

    public function user()
    {
        return $this->belongsTo('App\User', 'id');
    }
    public function Category()
    {
        return $this->belongsTo('App\GoodsCategory', 'goodsCategoryID');
    }

    public function Subcategory()
    {
        return $this->belongsTo('App\GoodsSubcategory', 'goodsSubcategoryID');
    }
    public function policeStation()
    {
        return $this->belongsTo('App\PoliceStation', 'policeStationID');
    }
    public function scopeSearch($query, $s){
        return $query->where('name','like','%'.$s.'%')
            ->orWhere('tag','like','%'.$s.'%')
            ->orWhere('lPlace','like','%'.$s.'%')
            ->orWhere('description','like','%'.$s.'%')
            ->orWhere('missingDate','like','%'.$s.'%')
            ->orWhere('goodsColor','like','%'.$s.'%');

    }
}
