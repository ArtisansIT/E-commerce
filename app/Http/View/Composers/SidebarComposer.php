<?php

namespace App\Http\View\Composers;

use App\Admin\Category;
use Illuminate\View\View;

class SidebarComposer
{
    public function compose(View $view){
        $view->with('allcategory', $this->allcategory());
    }

    public function allcategory(){
        return Category::allcategorywithsubcategory();
    }
   
}
