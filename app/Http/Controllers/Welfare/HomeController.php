<?php

namespace App\Http\Controllers\Welfare;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    protected $redirectTo = '/welfare/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('welfare.auth:welfare');
    }

    /**
     * Show the Welfare dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('welfare.home');
    }

}