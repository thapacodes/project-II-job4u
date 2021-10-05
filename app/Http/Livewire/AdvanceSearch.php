<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;
use App\Models\Job;

class AdvanceSearch extends Component
{
    public $search;
    public $type;
    public $category;
    // public $work_region;
    public $fully_remote;
    
    use WithPagination;

    public function render()
    {
        $search = '%'.$this->search.'%';
        $category = '%'.$this->category.'%';
        $type = '%'.$this->type.'%';
        // $region = '%'.$this->work_region.'%';
        $fully_remote = '%'.$this->fully_remote.'%';
        return view('livewire.advance-search', [
            'pageArray' => Job::where('category', 'like', $category)
            ->where('fully_remote','like', $fully_remote)
            ->where('title','like', $search)
            ->where('type','like', $type)
            ->paginate(20),
        ]);
    }
}
