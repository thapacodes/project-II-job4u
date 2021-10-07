<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\Job;
use App\Models\Company;
use Livewire\WithFileUploads;

class AddCompanyDetails extends Component
{
    use WithFileUploads;
    public $name;
    public $email;
    public $hq;
    public $logo;
    public $company_url;
    public $company_description;
    public $user_id;

    protected $rules = [
        'name' => 'required|string|min:4|max:160',
        'hq' => 'required|string|min:4|max:255',
        'logo' => 'required|image|max:1024', // 1MB Max
        'company_url' => 'required|string|min:4|max:255',
        'company_description' => 'required|string|min:4|max:4294967000',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $validatedData = $this->validate();

        $path = $this->logo->store('pictures/job', 'custom');
        $path = route('home').'/uploads'.'/'.$path;

        $company = Company::where('uploaded_by', $this->email)->get();

        if(count($company) == 0) {
            Company::create([
                'name' => $this->name,
                'slug' => preg_replace('/\s+/', '-', $this->name.'-'.Str::random(10)),
                'hq' => $this->hq,
                'logo' => $path,
                'url' => $this->company_url,
                'uploaded_by' => $this->user_email,
                'status' => true,
            ]);
    
            session()->flash('page-message', 'Company Details created successfully posted.');
        }
        elseif (count($company) == 1) {
            $company = Company::find($company[0].id);
            $company->name = is_null($this->name) ? $user->name : $this->name;
            $company->email = is_null($this->email) ? $user->email : $this->email;
            $company->hq = is_null($this->hq) ? $user->hq : $this->hq;
            $company->logo = $path;
            $company->company_url = is_null($this->company_url) ? $user->company_url : $this->company_url;
            $company->company_description = is_null($this->company_description) ? $user->company_description : $this->company_description;
            $company->save();
            session()->flash('page-message', 'Company details updated successfully.');
        }
    }

    public function render()
    {
        return view('livewire.add-company-details');
    }
}
