<?php

namespace App\Http\Controllers\Admin\Category;

use App\Admin\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryTwoController extends Controller
{

    public function parmanent_delete($id){
        $data = Category::restoresoftdelete($id)->forceDelete();
        return redirect()->back()->with('delete','Data restore');
    }
    public function restore_from_softdelete($id){
        $data = Category::restoresoftdelete($id)->restore();
        return redirect()->route('admin.category.index')->with('success','Data restore');
    }
    public function softDelete_list(){
    
        // $datas = Category::onlyTrashed()->get();
        // return view('admin.category.softdelete',compact('datas'));
        return view('admin.category.softdelete');
    }

    public function delete_multiple(Request $request){
       
            $allid = $request->input('deleteMany');
            // return $allid;
            foreach($allid as $data){
                Category::findid($data)->delete();
            }
            return redirect()->back();
        
       
            return redirect()->back()->with('delete','You are In Wrong Route');
        
    }
    public function category_delete_single(Category $id){

      $id->delete();
      return redirect()->back()->with('delete','Category Deletephp');
    }
}
