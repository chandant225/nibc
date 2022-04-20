<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Country;
use App\Models\Course;
use App\Models\Slider;
use App\Models\BlogCategory;
use Illuminate\Support\Str;



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

}
