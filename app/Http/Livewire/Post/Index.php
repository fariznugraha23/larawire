<?php

namespace App\Http\Livewire\Post;
use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function render()
    {
        $this->posts = Post::latest()->paginate(5);
        return view('livewire.post.index',[
            'posts' => Post::latest()->paginate(5)
        ]);
    }
}
