<?php

namespace App\Livewire;

use Livewire\Component;

class Breadcrumbs extends Component
{
    public $links = [];
    public $current;

    public function mount($links = [], $current = "")
    {
        $this->links = $links;
        $this->current = $current;
    }

    public function render()
    {
        return view('livewire.breadcrumbs');
    }
}
