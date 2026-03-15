<?php

namespace App\Livewire\Post;

use App\Livewire\Forms\PostForm;
use Livewire\Component;

class Form extends Component
{
    public PostForm $form;

    public function submit()
    {
        $this->form->submit();

        // Redirect back to the index page after creation
        return redirect()->to('/post');
    }

    public function render()
    {
        return view('livewire.post.form');
    }
}
