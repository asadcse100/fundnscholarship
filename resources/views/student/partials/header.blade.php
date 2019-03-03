
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>NSP Portal</title>
    </head>
    <body>
        <div class="header">
            <!-- <div class="top-header">
                <div class="container">
                    <div class="col-md-9">
                        <ul>
                            <li><i class="fa fa-graduation-cap fa-2x"></i></li>
                            <li><a href="index.php">Scholarship</a></li>
                            <li><a href="#">Fellowship</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <p>For Academic Year 2018-19</p>
                    </div>
                </div>
            </div> -->
            <div class="container">
                <nav class="navbar">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="{{ Route('home') }}"><img src="{{ asset('img/logo1.png')}}" class="img-responsive"></a>
                        </div>
                       <!--  <div align="center" style="width: 100px;">
                            <p><strong>National Scholarship Portal</strong></p>
                        </div> -->
                        <ul class="nav navbar-nav navbar-right">
                            <!-- <li><a class="navbar-brand" href="http://www.bangladesh.gov.bd/index.php?lang=en"><img src="img/111.png" class="img-responsive"></a></li> -->
                            <li><a class="navbar-brand" href="http://www.bangladesh.gov.bd/index.php?lang=en"><img src="img/444.png" class="img-responsive"></a></li>
                        </ul>
                    </div>
                </nav>
            </div>

        </div>
        <div class="menu">
            <div class="container">
                <ul class="main-navigation">
                   <li><a href="{{ Route('home') }}">Home</a></li>
                    <li><a href="{{ Route('about')}}">About Us</a></li>

                    <li><a href="{{ Route('frontend.stdApplyResults.show', 1)}}">Application</a></li>

                    <li><a href="#">Scholarships</a>
                        <ul>
                            @if(!Auth::guard('student')->guest())
                            <li><a href="#">As Students</a>
                                <ul>

<li class="{{ Request::is('stdApplyResults*') ? 'active' : '' }}">
    <a href="{!! route('frontend.stdApplyResults.create') !!}" >Result</a>
</li>

<li class="{{ Request::is('stdApplyProjects*') ? 'active' : '' }}">
    <a href="{!! route('frontend.stdApplyProjects.create') !!}"><span>Project</span></a>
</li>

<li class="{{ Request::is('stdApplyNationalIssus*') ? 'active' : '' }}">
    <a href="{!! route('frontend.stdApplyNationalIssus.create') !!}"><span>National Issues</span></a>
</li>

<li class="{{ Request::is('stdApplyInnovations*') ? 'active' : '' }}">
    <a href="{!! route('frontend.stdApplyInnovations.create') !!}"><span>Innovations</span></a>
</li>

<li class="{{ Request::is('stdApplyPoorFunds*') ? 'active' : '' }}">
    <a href="{!! route('frontend.stdApplyPoorFunds.create') !!}"><span>Poor Fund</span></a>
</li>
                                    
                                    
                                </ul>
                            </li>
 @endif

 @if(!Auth::guard('institution')->guest()) 
                            <li><a href="#">As Institute</a>
                                <ul>      
                           
<li class="{{ Request::is('instiInnovations*') ? 'active' : '' }}">
    <a href="{!! route('frontend.instiInnovations.create') !!}"><span> Innovations</span></a>
</li>

 @endif
                                    
@if(!Auth::guard('welfare')->guest())                                   
<li class="{{ Request::is('instiWelfares*') ? 'active' : '' }}">
    <a href="{!! route('frontend.instiWelfares.create') !!}"><span> Welfares</span></a>
</li>    
                                   
                                </ul>


                            </li>
@endif   
                            
                             @if(!Auth::guard('individual')->guest())
                            <li><a href="#">As Individual</a>
                                <ul>
<li class="{{ Request::is('indivisiInnovations*') ? 'active' : '' }}">
    <a href="{!! route('frontend.indivisiInnovations.create') !!}"><span>Innovation</span></a>
</li>

<li class="{{ Request::is('indivisiNationals*') ? 'active' : '' }}">
    <a href="{!! route('frontend.indivisiNationals.create') !!}"><span>National Issue</span></a>
</li>
                                </ul>
                            </li>
@endif
                        </ul>
                    </li>


                    <li><a href="{{asset('pdf/faq.pdf')}}">FAQ's</a>
                       <!--  <ul>
                            <li><a href="{{ Route('faq')}}" target="_blank">FAQ's</a></li>
                            <li><a href="faq">FAQ's</a></li>
                            <li><a href="#" target="_blank">Institute FAQ</a></li>
                        </ul> -->
                    </li>


                    <li><a href="#">Complains</a>
                        <ul>
<li class="{{ Request::is('complains*') ? 'active' : '' }}">
    <a href="{!! route('frontend.complains.create') !!}"><span>Complains</span></a>
</li>                            <li><a href="{!! route('frontend.complains.index') !!}">View Complain Status</a></li>
                        </ul>
                    </li>                 
@if (Auth::guard('welfare')->guest() AND Auth::guard('student')->guest() AND Auth::guard('institution')->guest() AND Auth::guard('individual')->guest())
                    <li><a href="#">Regitration</a>
                        <ul>
                            <li><a href="{{ Route('student.register')}}" target="_blank">As a Student</a></li>
                            <li><a href="{{ Route('institution.register')}}" target="_blank">As a Educational Institution</a></li>
                            <li><a href="{{ Route('welfare.register')}}" target="_blank">As a Welfare institute</a></li>
                            <li><a href="{{ Route('individual.register')}}" target="_blank">Induvidual</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Login</a>
                        <ul>
                            <li><a href="{{ Route('student.login')}}" target="_blank">As a Student</a></li>
                            <li><a href="{{ Route('institution.login')}}" target="_blank">As a Educational Institution</a></li>
                            <li><a href="{{ Route('welfare.login')}}" target="_blank">As a Welfare institution</a></li>
                            <li><a href="{{ Route('individual.login')}}" target="_blank">Individual</a></li>
                        </ul>
                    </li>
                    @else
                    <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                @if(!Auth::guard('student')->guest())
                                {{ Auth::guard('student')->user()->name }}

                                @elseif(!Auth::guard('welfare')->guest())
                                {{ Auth::guard('welfare')->user()->name }}

                                @elseif(!Auth::guard('institution')->guest())
                                {{ Auth::guard('institution')->user()->name }}

                                @elseif(!Auth::guard('individual')->guest())
                                {{ Auth::guard('individual')->user()->name }}

                                @endif
                                 <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="

                                @if(!Auth::guard('student')->guest()){{ route('student.logout') }}

                                @elseif(!Auth::guard('welfare')->guest()){{ route('welfare.logout') }}

                                @elseif(!Auth::guard('institution')->guest()){{ route('institution.logout') }}

                                @elseif(!Auth::guard('individual')->guest()){{ route('individual.logout') }}
                                @endif
                                    "
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="                                @if(!Auth::guard('student')->guest()){{ route('student.logout') }}

                                @elseif(!Auth::guard('welfare')->guest()){{ route('welfare.logout') }}

                                @elseif(!Auth::guard('institution')->guest()){{ route('institution.logout') }}

                                @elseif(!Auth::guard('individual')->guest()){{ route('individual.logout') }}
                                @endif
                                " method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>

            </div>
        </div>
    </body>

<!-- Mirrored from scholarships.gov.in/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Dec 2018 10:32:32 GMT -->
</html>