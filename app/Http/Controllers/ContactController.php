<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Country;
use App\Models\Contact;

class ContactController extends Controller
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
        return view('contact')
        ->with(['countries' => $countries, 'courses' => $courses]);
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
        $request->validate([
            'name' =>'required',
            'subject' =>'required',
            'email' =>'required|email',
            'phone' =>'required',
            'message' =>'required',
        ]);
        
        Contact::create([
            'name' => $request->input('name'),
            'subject' => $request->input('subject'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'message' => $request->input('message'),
        ]);

              $mail_data = [
                  'recipient' => 'chandant225@gmail.com',
                  'fromEmail' => $request->email,
                  'fromName' => $request->name,
                  'phone' => $request->phone,
                  'subject' => $request->subject,
                  'body' => $request->message
              ];
              \Mail::send('email_template',$mail_data, function($message) use($mail_data) {
                  $message->to($mail_data['recipient'])
                    ->from($mail_data['fromEmail'], $mail_data['fromName'])
                    ->subject($mail_data['subject']);
              });
              return redirect()->back()->with('success', 'Email Sent');
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
