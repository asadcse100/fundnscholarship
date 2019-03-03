<?php

namespace App\Http\Controllers\Institution;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    protected $redirectTo = '/institution/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('institution.auth:institution');
    }

    /**
     * Show the Institution dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('institution.home');
    }

}