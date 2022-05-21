<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Course;
use App\Models\College;
use App\Models\AcademicDegree;
use Illuminate\Support\Str;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {         
        $countries = Country::orderBy('updated_at','DESC')->get();
        $courses = Course::orderBy('updated_at','DESC')->get();
        return view('countries')
        ->with(['countries'=>$countries,'courses'=>$courses]);
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
        $country = Country::where('slug', $slug)->first();
        $colleges = College::where('country_slug',$slug)->get();
        $degrees = AcademicDegree::orderBy('updated_at','DESC')->get();
        $countries = Country::orderBy('updated_at','DESC')->get();
        
        $courses = Course::orderBy('updated_at','DESC')->get();
        return view('single_country')
        ->with(['country'=> $country, 'countries'=>$countries,'courses'=>$courses,'colleges'=>$colleges,'degrees' => $degrees]);
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
