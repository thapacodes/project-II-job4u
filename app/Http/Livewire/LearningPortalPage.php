<?php

namespace App\Http\Livewire;

use Livewire\Component;
use \App\Models\LearningPortal;
use Livewire\WithPagination;

class LearningPortalPage extends Component
{
    public $search;
    public $category;

    use WithPagination;

    public function render()
    {
        $search = '%'.$this->search.'%';
        $category = '%'.$this->category.'%';
        return view('livewire.learning-portal-page', [
            'pageArray' => LearningPortal::where('category', 'like', $category)
            ->where('title','like', $search)
            ->paginate(20),
        ]);
    }
}
