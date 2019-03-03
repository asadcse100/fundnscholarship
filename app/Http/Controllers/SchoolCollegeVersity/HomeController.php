<?php

namespace App\Http\Controllers\SchoolCollegeVersity;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    protected $redirectTo = '/schoolcollegeversity/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('school_college_versity.auth:school_college_versity');
    }

    /**
     * Show the SchoolCollegeVersity dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('schoolcollegeversity.home');
    }

}