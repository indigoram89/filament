<?php

namespace Filament\Widgets;

use Livewire\Component;

class Widget extends Component
{
    public static $sort = 0;

    public static $view;

    public function render()
    {
        return view(static::$view);
    }
}
