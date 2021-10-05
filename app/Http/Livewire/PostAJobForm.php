<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\Job;
use App\Models\Company;

class PostAJobForm extends Component
{
    public $title;
    public $category;
    public $type;
    public $fully_remote;
    public $work_region;
    public $form_url;
    public $job_description;

    public $name;
    public $hq;
    public $logo;
    public $company_url;
    public $company_description;

    public $user_email;


    protected $rules = [
        'title' => 'required|string|min:4|max:160',
        'category' => 'required|string|min:4|max:255',
        'type' => 'required|string|min:4|max:255',
        'fully_remote' => 'required|string|min:4|max:255',
        'work_region' => 'nullable|string|max:255',
        'form_url' => 'required|string|min:4|max:255',
        'job_description' => 'required|string|min:4|max:4294967000',
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

        Job::create([
            'title' => $this->title,
            'slug' => preg_replace('/\s+/', '-', $this->title.'-'.Str::random(10)),
            'category' => $this->category,
            'type' => $this->type,
            'logo' => $path,
            'fully_remote' => $this->fully_remote,
            'work_region' => $this->work_region,
            'url' => $this->form_url,
            'description' => $this->job_description,
            'uploaded_by' => $this->user_email,
            'status' => true,
        ]);

        Company::create([
            'name' => $this->name,
            'slug' => preg_replace('/\s+/', '-', $this->name.'-'.Str::random(10)),
            'hq' => $this->hq,
            'logo' => $path,
            'url' => $this->company_url,
            'uploaded_by' => $this->user_email,
            'status' => true,
        ]);

        session()->flash('page-message', 'Job successfully posted.');
    }

    public function render()
    {
        return view('livewire.post-a-job-form');
    }
}
