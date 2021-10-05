<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;
use App\Models\Company;

class AllCompaniesFilter extends Component
{
    public $search;

    public function render()
    {
        $search = '%'.$this->search.'%';
        return view('livewire.all-companies-filter', [
            'pageArray' => Company::where('name', 'like', $search)->paginate(20),
        ]);
    }
}
