<?php

namespace App\Http\View\Composers;

use App\Admin\Category;
use Illuminate\View\View;

class CategoryComposer
{

    public function compose(View $view)
    {

        $view->with('Allcategory', $this->allcategory())->with('trasheditem',$this->trasheditem() );
        // $view->with([
        //     'Allcategory',$this->allcategory(),
        //     'trasheditem',$this->trasheditem()
        // ]);
        
    }

    public function trasheditem(){
        
       return  Category::onlytrashed();
    }
    public function allcategory(){
        
       return  Category::categor();
    }
}
