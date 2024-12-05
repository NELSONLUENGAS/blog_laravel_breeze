<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BlogLayout extends Component
{
    public $metaTitle;
    public $metaDescription;

    public function __construct(string $metaTitle = 'Default Title', string $metaDescription = 'Default Description')
    {
        $this->metaTitle = $metaTitle;
        $this->metaDescription = $metaDescription;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('layouts.blog-layout');
    }
}
