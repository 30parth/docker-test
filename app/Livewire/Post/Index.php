<?php

namespace App\Livewire\Post;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Computed;

class Index extends Component
{
    use WithPagination;

    #[Computed]
    public function posts()
    {
        return Post::paginate(10);
    }

    public function render()
    {
        return view('livewire.post.index');
    }
}
