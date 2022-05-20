<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Blog;
use App\Models\Country;
use App\Models\Course;
use App\Models\Slider;
use App\Models\BlogCategory;
use App\Models\AcademicDegree;
use App\Models\College;




class PageController extends Controller
{
    public function homepage() {
        $countries = Country::orderBy('updated_at','DESC')->get();
        $courses = Course::orderBy('updated_at','DESC')->get();
        $blogs = Blog::orderBy('updated_at','DESC')->get();
        $sliders = Slider::orderBy('updated_at','DESC')->get();
        return view('index')
        ->with(['countries' => $countries, 'blogs' => $blogs,'courses' => $courses,'sliders' => $sliders]);
    }

    public function about_us() {
        $countries = Country::orderBy('updated_at','DESC')->get();
        $courses = Course::orderBy('updated_at','DESC')->get();
        return view('about')
        ->with(['countries' => $countries, 'courses' => $courses]);

    }

    public function gallery(){
        $countries = Country::orderBy('updated_at','DESC')->get();
        $courses = Course::orderBy('updated_at','DESC')->get();
        return view('gallery')
        ->with(['countries' => $countries,'courses' => $courses]);;
    }

    public function filtered_blogs($slug) {
        $categories = BlogCategory::orderBy('updated_at','DESC')->get();
        $countries = Country::orderBy('updated_at','DESC')->get();
        $courses = Course::orderBy('updated_at','DESC')->get();
        $blogs = Blog::where('category_slug', $slug)->get();
        $sidebar_blogs = Blog::offset(0)->limit(3)->get();
        return view('filtered_blogs')
        ->with(['blogs' => $blogs, 'categories' => $categories, 'sidebar_blogs' => $sidebar_blogs,'countries' => $countries, 'courses' => $courses]);
    }

    public function avaliable_courses($country_slug,$degree_slug) {
        $countries = Country::orderBy('updated_at','DESC')->get();
        $courses = Course::orderBy('updated_at','DESC')->get();
        $colleges = College::where('country_slug',$country_slug)->get();
        $avaliable_courses = Course::where('country_slug', '=',$country_slug)->where('degree_slug', '=', $degree_slug)->get();
        return view('avaliable_courses')
        ->with(['countries' => $countries, 'courses' => $courses,'avaliable_courses'=>$avaliable_courses,'degree'=>$degree_slug,'country_slug' => $country_slug,'colleges'=>$colleges]);
    }

    public function search_college(Request $request){
        $country = $request->input('country');
        $course = $request->input('course');
        $result_search = College::where('country_slug',$country)->get();
        return view('search_page')->with(['search_results'=> $result_search]);
    }
    
    public function institution() {
        $countries = Country::orderBy('updated_at','DESC')->get();
        $courses = Course::orderBy('updated_at','DESC')->get();
        $colleges = College::orderBy('updated_at','DESC')->get();
        return view('institution')
         ->with(['countries' => $countries, 'courses' => $courses,'colleges' => $colleges]);
    }

}
