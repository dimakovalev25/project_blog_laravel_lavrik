<?php

namespace App\View\Components\Naws;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Route;

class Link extends Component
{

    public string $href;
    public bool $active;
    public function __construct(
        string $route,
        array $params

    )
    {
        $this->href = route($route, $params);
        $this->active = Route::currentRouteName() === $route;

    }
    public function render(): View|Closure|string
    {
        return view('components.naws.link');
    }
}
