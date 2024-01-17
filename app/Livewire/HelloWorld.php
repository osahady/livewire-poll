<?php

namespace App\Livewire;

use Livewire\Component;


class HelloWorld extends Component
{
    public function render()
    {
        return <<<'HTML'
        <div class="text-gray-500 my-4">
            hello world {{ time() }}
            <button wire:click="$refresh"  type="button">Refresh</button>
        </div>
        HTML;
    }
}