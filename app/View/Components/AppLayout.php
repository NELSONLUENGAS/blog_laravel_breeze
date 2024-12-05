<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class AppLayout extends Component
{

    public $metaTitle;
    public $metaDescription;

    public function __construct(string $metaTitle = 'Default Title', string $metaDescription = 'Default Description')
    {
        $this->metaTitle = $metaTitle;
        $this->metaDescription = $metaDescription;
    }

    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view('layouts.app');
    }
}
