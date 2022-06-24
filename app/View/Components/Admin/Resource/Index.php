<?php

namespace App\View\Components\Admin\Resource;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;

class Index extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $modelName,
        public Collection $models,
        public array $attrs
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render() : View|Closure|string
    {
        return view('components.admin.resource.index');
    }
}
