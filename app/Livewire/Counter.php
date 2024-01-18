<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Counter')]
class Counter extends Component
{
    public $count = 0;

    public function inc($by)
    {
        $this->count = $this->count + $by;
    }

    public function dec()
    {
        $this->count--;
    }
    public function render()
    {
        return view('livewire.counter');
    }
}