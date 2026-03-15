<?php

namespace App\Livewire\Forms;

use App\Models\Post;
use Livewire\Attributes\Validate;
use Livewire\Form;

class PostForm extends Form
{
    #[Validate('required')]
    public $title;

    #[Validate('required')]
    public $body;

    public function submit()
    {
        Post::create($this->validate());
    }
}
