<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    protected $guarded =[];

    public function scopeOnlytrashed($query){
        return $query->onlyTrashed()->cursor();
    }

    public function scopeCategor($query){
        return $query->cursor();
    }
    public function scopeAllcategorywithsubcategory($query){
        return $query->with('subcategories')->cursor();
    }

    public function scopeRestoresoftdelete($query ,$id){
        return $query->where('id',$id)->withTrashed()->first();
    }

    public function subcategories(){
        return $this->hasMany('App\Admin\Subcategory');
    }
    public function scopeFindid($query , $id){
        return $query->where('id', $id)->first();
    }

}
