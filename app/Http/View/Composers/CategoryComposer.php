<?php

namespace App\Http\View\Composers;

use App\Admin\Category;
use Illuminate\View\View;

class CategoryComposer
{

    public function compose(View $view)
    {

        $view->with('Allcategory', Category::all());
    }
}
