<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Country;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Comment;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = BlogCategory::orderBy('updated_at','DESC')->get();
        $countries = Country::orderBy('updated_at','DESC')->get();
        $courses = Course::orderBy('updated_at','DESC')->get();
        $blogs = Blog::latest()->paginate(4);
        $sidebar_blogs = Blog::offset(0)->limit(3)->get();
        return view('blog')
        ->with(['categories' => $category,'blogs' => $blogs,'sidebar_blogs' => $sidebar_blogs,'countries' => $countries, 'courses'=>$courses]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $countries = Country::orderBy('updated_at','DESC')->get();
        $courses = Course::orderBy('updated_at','DESC')->get();
        $blog = Blog::where('slug', $slug)->first();
        $categories = BlogCategory::orderBy('updated_at', 'DESC')->get();
        $sidebar_blogs = Blog::offset(0)->limit(3)->get();
        $comments = Comment::where('blog_slug' , $slug)->get();
        return view('single_blog')->with(['blog' => $blog,'categories' => $categories, 'sidebar_blogs' => $sidebar_blogs,
    'comments' => $comments,'countries' => $countries,'courses' => $courses]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
