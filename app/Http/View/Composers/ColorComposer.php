<?php

namespace App\Http\View\Composers;

use App\Admin\Brand;
use App\Admin\Color;
use Illuminate\View\View;

class ColorComposer
{

    public function compose(View $view)
    {

        $view->with('allcolor', $this->allcolor())
             ->with('trasheditem', $this->trasheditem());
        // $view->with([
        //     'Allcategory',$this->allcategory(),
        //     'trasheditem',$this->trasheditem()
        // ]);

    }

    public function trasheditem()
    {

        return  Color::onlytrashed();
    }
    public function allcolor()
    {

        return  Color::allcolor();
    }
}
