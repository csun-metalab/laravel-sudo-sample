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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function getSubmit() {
        return view('submit');
    }

    public function postSubmit(Request $request) {
        // return to the home screen with a success message
        return redirect(route('home'))
            ->with('success', 'You successfully submitted: ' . $request->input('text'));
    }
}
