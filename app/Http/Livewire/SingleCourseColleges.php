<?php

namespace App\Http\Livewire;
use Illuminate\Support\Str;
use Livewire\Component;
use App\Models\College;

class SingleCourseColleges extends Component
{
    public $data,$colleges;
     

    public function filtercollege($country_slug) {
       $this->colleges = College::where('country_slug',Str::lower($country_slug))->get();
    }
    
    public function mount($newdata) {
    
       $this->data = explode(',',$newdata);
     
                            
    }

    public function render()
    {
        return view('livewire.single-course-colleges');
    }
}
