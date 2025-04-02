<?php

namespace App\View\Components;

use Closure;
use App\Models\Brand;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class ProductFilter extends Component
{
    public $name;
    public $tm;
    /**
     * Create a new component instance.
     */
    public function __construct(string $name = "Каталог")
    {
        $this->name = $name;
        $this->tm = Brand::select()->orderBy('order')->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.product-filter');
    }
}
