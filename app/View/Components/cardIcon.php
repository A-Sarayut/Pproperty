<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class cardIcon extends Component
{
    /**
     * Create a new component instance.
     */
    // public $icon;
    // public $title;
    // public $description;
    // public $url;
    // public $urlText;

    public function __construct(public ?string $icon, public ?string $title, public ?string $description, public ?string $url, public ?string $urlText, public ?string $align)
    {
        //
        // $this->icon = $icon;
        // $this->title = $title;
        // $this->description = $description;
        // $this->url = $url;
        // $this->url = $urlText;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card-icon');
    }
}
