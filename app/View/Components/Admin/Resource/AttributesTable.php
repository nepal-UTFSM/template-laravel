<?php

namespace App\View\Components\Admin\Resource;

use Illuminate\Database\Eloquent\Model;
use Illuminate\View\Component;

class AttributesTable extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public Model $model)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.admin.resource.attributes-table');
    }
}
