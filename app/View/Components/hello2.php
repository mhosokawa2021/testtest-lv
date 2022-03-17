<?php

namespace App\View\Components;

use Illuminate\View\Component;

class hello2 extends Component
{
    public $type;

    public function __construct($type = 'creator')
    {
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.hello2');
    }
}
