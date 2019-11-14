<?php

namespace App\Http\View\Composers;

use App\Admin\Brand;
use App\Admin\Size;
use Illuminate\View\View;

class SizeComposer
{

    public function compose(View $view)
    {

        $view->with('allsize', $this->allsize())
             ->with('trasheditem', $this->trasheditem());
        // $view->with([
        //     'Allcategory',$this->allcategory(),
        //     'trasheditem',$this->trasheditem()
        // ]);

    }

    public function trasheditem()
    {

        return  Size::onlytrashed();
    }
    public function allsize()
    {

        return  Size::allsize();
    }
}
