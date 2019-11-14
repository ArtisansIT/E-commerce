<?php

namespace App\Http\Controllers\Admin\Size;

use App\Admin\Size;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SizeTwoController extends Controller
{
    public function parmanent_delete($id){
        $data = Size::restoresoftdelete($id)->forceDelete();
        return redirect()->back()->with('delete','Data restore');
    }
    public function restore_from_softdelete($id){
        $data = Size::restoresoftdelete($id)->restore();
        return redirect()->route('admin.size.index')->with('success','Data restore');
    }
    public function softDelete_list(){
        
        // $datas = Category::onlyTrashed()->get();
        // return view('admin.category.softdelete',compact('datas'));
        return view('admin.size.softdelete');
    }
}
