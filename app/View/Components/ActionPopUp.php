<?php

namespace App\View\Components;

use Closure;
use App\Models\Blog;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class ActionPopUp extends Component
{

    public $last_action;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->last_action = Blog::orderBy('created_at', 'DESC')->where('is_action', true)->first();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.action-pop-up');
    }
}
