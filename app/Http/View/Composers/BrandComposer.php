<?php

namespace App\Http\View\Composers;

use App\Admin\Brand;
use Illuminate\View\View;

class BrandComposer
{

    public function compose(View $view)
    {

        $view->with('allbrand', $this->allbrand())
             ->with('trasheditem', $this->trasheditem());

    }

    public function trasheditem()
    {

        return  Brand::onlytrashed();
    }
    public function allbrand()
    {

        return  Brand::allbrand();
    }
}
