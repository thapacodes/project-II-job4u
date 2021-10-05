<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;
use App\Models\Blog;

class BlogPostCard extends Component
{
    public $search;
    public $category;

    use WithPagination;

    public function render()
    {
        $search = '%'.$this->search.'%';
        $category = '%'.$this->category.'%';
        return view('livewire.blog-post-card', [
            'pageArray' => Blog::where('category', 'like', $category)
            ->where('title','like', $search)
            ->paginate(20),
        ]);
    }
}
