<?php

namespace App\Http\Controllers\Admin\SubCategory;

use App\Admin\Subcategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubCategoryTwoController extends Controller
{
    public function parmanent_delete($id){
        $data = Subcategory::restoresoftdelete($id)->forceDelete();
        return redirect()->back()->with('delete','Data restore');
    }
    public function restore_from_softdelete($id){
        $data = Subcategory::restoresoftdelete($id)->restore();
        return redirect()->route('admin.subcategory.index')->with('success','Data restore');
    }
    public function softDelete_list(){
        
        // $datas = Category::onlyTrashed()->get();
        // return view('admin.category.softdelete',compact('datas'));
        return view('admin.sub_category.softdelete');
    }
}

