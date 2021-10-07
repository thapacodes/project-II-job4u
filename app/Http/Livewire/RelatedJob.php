<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Job;

class RelatedJob extends Component
{
    public $category;

    public function render()
    {
        $search = '%'.$this->category.'%';
        return view('livewire.related-job', [
            'pageArray' => Job::where('category', 'like', $search)->limit(4)->get()
        ]);
    }
}
