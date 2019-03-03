<!DOCTYPE html>

<html>
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
@include('Front.Partials.style')

    <body>

@include('Front.Partials.header')
@include('Front.Partials.slider')


        <div class="clearfix">&nbsp;</div>
        <div class="row-fluid">
            <div class="my-container">
                <div class="helpdesk">

                    @include('Front.Partials.sidebar')

                   @yield('content')

                </div>

            </div>
            <div class="clearfix">&nbsp;</div>
            <div class="clearfix">&nbsp;</div>
            
			@include('Front.Partials.footer')



        </div>
    </div>


    <!--<div class="app-store" style="position:absolute; top:180px; right:0;">
            <a href="#"><img src="img/google.png"></a><br/><br/>
        <a href="#"><img src="img/apple.png"></a>
    </div>
    -->
    <!-----------------------accordian js------------------------------>
     @include('Front.Partials.script')
</body>
</html>
