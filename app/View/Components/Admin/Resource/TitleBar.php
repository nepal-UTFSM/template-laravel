<?php

namespace App\View\Components\Admin\Resource;

use Illuminate\View\Component;

class TitleBar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public string $title,
        public ?string $prevUrl = null
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.resource.title-bar');
    }
}
