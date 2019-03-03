<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{   

    public function home(){
        return view('Front.Pages.home');
    } 
       

    public function about(){
    	return view('Front.Pages.about');
    }    

    public function scholarships(){
    	return view('Front.Pages.scholarships');
    }   

    public function faq(){
    	return view('Front.Pages.faq');
    }

    public function copyright_policy(){
        return view('Front.Pages.copyright_policy');
    }

    public function privacyPolicy(){
        return view('Front.Pages.privacyPolicy');
    }

    public function termsAndConditions(){
        return view('Front.Pages.termsAndConditions');
    }

    public function siteMap(){
        return view('Front.Pages.siteMap');
    }
    
}
