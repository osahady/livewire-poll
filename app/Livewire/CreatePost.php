<?php

namespace App\Livewire;

use App\Models\Medcine;
use Livewire\Component;
use Livewire\Attributes\Rule;

class CreatePost extends Component
{
    #[Rule('required', message: 'من فضلك أدخل اسم الدواء')]
    #[Rule('min:4', message: 'الاسم قصير جدًا')]
    public $medcine = "";

    #[Rule('required', message: 'من فضلك أدخل استخدامات الدواء')]
    #[Rule('min:6', message: 'من فضلك أدخل اكتب وصف كاف للدواء')]
    public $description = "";

    public function add(){
        dd('hello from create post');
        $this->validate();
        Medcine::create([
            'medcine' => $this->medcine,
            'description' => $this->description
        ]);

        $this->reset(['medcine', 'description']);
        session()->flash('message', 'تم إضافة الدواء بنجاح');
        $this->redirect('/show-posts');
    }

    public function render()
    {
        return view('livewire.create-post');
    }
}