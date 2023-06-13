<?php

namespace App\View\Components\Controls;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class newinput extends Component
{
    public string $name;
    public string $id;
    public string $label;
    public string $type;
    public string $defval;

    public function __construct(
        string  $name,
        string  $label,
        string  $type = 'text',
        ?string $id = null,
        string  $defval)
    {
        $this->name = $name;
        $this->label = $label;
        $this->type = $type;
        $this->id = $id;
        $this->defval = $defval;

        if ($id === null) {
            $id = "field$name";
        }

        $this->id = $id;
    }

    public function render(): View|Closure|string
    {
        return view('components.controls.newinput');
    }
}
