<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\College;
use App\Models\Country;

class CollegeList extends Component
{
    public $filtered_colleges,$active;

    public function filtercollege($slug) 
    {
         $this->filtered_colleges = College::where('country_slug',$slug)->get();
         $this->active = $slug;
    }
      public function mount() 
    {
            $this->filtered_colleges = College::orderBy('updated_at','DESC')->get();
    }

    public function render()
    {
        $countries = Country::orderBy('updated_at','DESC')->get();
        
        return view('livewire.college-list')
         ->with(['countries' => $countries]);
    }
}
