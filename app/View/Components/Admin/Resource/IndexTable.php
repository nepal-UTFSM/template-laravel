<?php

namespace App\View\Components\Admin\Resource;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class IndexTable extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public Collection $models,
        public string $modelName,
        public array $a
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render() : View|Closure|string
    {
        return view('components.admin.resource.index-table');
    }
}
