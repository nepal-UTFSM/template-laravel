<?php

namespace App\View\Components\Admin\Resource;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Database\Eloquent\Model;

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
    public function render() : View|Closure|string
    {
        return view('components.admin.resource.attributes-table');
    }
}
