<?php

namespace App\Livewire;

use App\Models\Medcine;
use Livewire\Component;

class ShowPosts extends Component
{

    public function delete(Medcine $medcine){
        $medcine->delete();
    }
    public function render()
    {
        return view('livewire.show-posts',
        ['medcines' =>
        Medcine::latest()->get()]);
    }
}