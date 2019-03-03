<?php

namespace App\Http\Controllers\Individual;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    protected $redirectTo = '/individual/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('individual.auth:individual');
    }

    /**
     * Show the Individual dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('individual.home');
    }

}