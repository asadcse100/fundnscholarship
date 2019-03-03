<div class="clearfix"></div>
            <div class="slider">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <!--<ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                    </ol> -->

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="{{asset('img/0.png')}}">
                    </div>

                    <div class="item">
                        <img src="{{asset('img/1.png')}}">

                    </div>

                    <div class="item">
                        <img src="{{asset('img/2.png')}}">

                    </div>

                    <div class="item">
                        <img src="{{asset('img/3.png')}}">

                    </div>


                    <!-- <div class="item">
                        <img src="{{asset('img/4.png')}}">

                    </div> -->

                    <!--    <div class="item">
                          <img src="/img/univer.jpg">
                        </div>
                    
                        <div class="item">
                          <img src="/img/total.jpg">
                            <h3>Fresh : 0<br/>
                                Renewal : 12044589
                            </h3>
                        </div>-->
                    <div class="left-btn" style="z-index:1;">
                        <!--    	<a href="#" class="btn btn-danger">Search for Institute</a>&nbsp; &nbsp;<a href="#"  class="btn btn-info">Dashboard</a>-->
                        <li class="{{ Request::is('allEducationalInstitutions*') ? 'active' : '' }}">
    <a href="{!! route('frontend.allEducationalInstitutions.index') !!}" tagret class="btn btn-danger"><span>Search for Institution</span></a>
</li>&nbsp; &nbsp;<!-- <a href="https://nsp.gov.in/dashboard/" target="_blank" class="btn btn-info">Dashboard</a> -->
                    </div>
                </div>


                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>