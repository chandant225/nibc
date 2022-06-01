<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\College_with_course;
use App\Models\Course;

class SingleCollegeCourses extends Component
{

   public $courseData = array();

   public function filterCourse($degree_slug) {
       $this->courseData = array_filter($this->courseData, function($data) use($degree_slug) {
                  return $data->degree_slug == $degree_slug;
       }) ;
   
   }

    public function mount($collegeSlug) {
      
        $courses = College_with_course::where('college_slug',$collegeSlug)->get();
        foreach($courses as $course){
             $targetcourse = Course::where('id',$course->course_id)->first();
             $this->courseData[] = $targetcourse;
            
        }    
    }
    
    public function render()
    {
      
        return view('livewire.single-college-courses');
    }
}
