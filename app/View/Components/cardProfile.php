<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class cardProfile extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public ?string $imgPath, public string $name, public string $position, public ?string $description, public ?string $linkedInUrl, public ?string $xUrl)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card-profile');
    }
}
