<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FeeStructure;
use App\Models\Country;
use App\Models\Course;

class FeeStructureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  string $country_slug $college_slug $degree_slug $course_slug
     * @return \Illuminate\Http\Response
     */
    public function show($country_slug, $college_slug,$degree_slug, $course_slug)
    {

        $countries = Country::orderBy('updated_at','DESC')->get();
        $courses = Course::orderBy('updated_at','DESC')->get();

        $fee_structure = FeeStructure::where('country_slug',"=", $country_slug)
        ->where('college_slug',"=",$college_slug)
        ->where('course_slug',"=", $course_slug)
        ->where('academic_degree_slug',"=", $degree_slug)->first();
        return view('fee_structure')
        ->with(['fee_structure'=>$fee_structure,'countries'=>$countries, 'courses' => $courses]);
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
