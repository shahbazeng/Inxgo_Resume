<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
        public function aboutus()
    {
        return view('pages.about');
    }
     public function allresume()
    {
        return view('pages.resumes');
    }
      public function inxgocontact()
    {
        return view('pages.contactus');
    }
    public function contactStore(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
        $details = [
        'title' => $request->subject,
        'body' => $request->message,
        ];
        \Mail::to($request->email)->send(new \App\Mail\MyMail($details));
        return redirect('contact');

    }
}
