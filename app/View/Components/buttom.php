<?php

namespace App\View\Components;

use Illuminate\View\Component;

class buttom extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $text;
    public $link;

    public function __construct($text, $link)
    {
        $this->text = $text;
        $this->link = $link;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.buttom');
    }
}
