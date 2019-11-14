<?php

namespace App\Http\Controllers\Admin\Color;

use App\Admin\Color;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ColorTwoController extends Controller
{
    public function parmanent_delete($id){
        $data = Color::restoresoftdelete($id)->forceDelete();
        return redirect()->back()->with('delete','Data restore');
    }
    public function restore_from_softdelete($id){
        $data = Color::restoresoftdelete($id)->restore();
        return redirect()->route('admin.color.index')->with('success','Data restore');
    }
    public function softDelete_list(){
        
        // $datas = Category::onlyTrashed()->get();
        // return view('admin.category.softdelete',compact('datas'));
        return view('admin.color.softdelete');
    }
}
