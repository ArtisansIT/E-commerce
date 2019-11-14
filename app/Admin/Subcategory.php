<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subcategory extends Model
{
    use SoftDeletes;
    protected $guarded =[];

    public function scopeAllsubcategory($query)
    {
        return $query->cursor();
    }

    public function scopeOnlytrashed($query)
    {
        return $query->onlyTrashed()->cursor();
    }
    public function scopeRestoresoftdelete($query, $id)
    {
        return $query->where('id', $id)->withTrashed()->first();
    }

    public function category(){
        return $this->belongsTo('App\Admin\Category');
    }
}
