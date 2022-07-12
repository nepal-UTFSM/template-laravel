<?php

namespace App\View\Components\Admin\Resource;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class Index extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $modelName,
        public Collection $models,
        public array $attrs,
        public ?string $query,
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.admin.resource.index');
    }
}
