<?php

namespace App\Http\Controllers\Admin\Brand;

use App\Admin\Brand;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BrandTwoController extends Controller
{
    public function parmanent_delete($id){
        $data = Brand::restoresoftdelete($id)->forceDelete();
        return redirect()->back()->with('delete','Data restore');
    }
    public function restore_from_softdelete($id){
        $data = Brand::restoresoftdelete($id)->restore();
        return redirect()->route('admin.brand.index')->with('success','Data restore');
    }
    public function softDelete_list(){
        
        // $datas = Category::onlyTrashed()->get();
        // return view('admin.category.softdelete',compact('datas'));
        return view('admin.brand.softdelete');
    }
}
