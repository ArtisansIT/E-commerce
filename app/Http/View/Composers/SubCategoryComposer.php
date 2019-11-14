<?php

namespace App\Http\View\Composers;

use App\Admin\Category;
use App\Admin\Subcategory;
use Illuminate\View\View;

class SubCategoryComposer
{

    public function compose(View $view)
    {

        $view->with('allsubcategory', $this->allsubcategory())->with('trasheditem',$this->trasheditem());
        // $view->with([
        //     'Allcategory',$this->allcategory(),
        //     'trasheditem',$this->trasheditem()
        // ]);
        
    }

    public function trasheditem(){
        
       return  Subcategory::onlytrashed();
    }
    public function allsubcategory(){
        
       return  Subcategory::allsubcategory();
    }
}
