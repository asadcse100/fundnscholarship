@extends('Front/layouts/master')
@section('content')

<div class="col-md-9">
    <div id="TabbedPanels1" class="TabbedPanels">
        <ul class="TabbedPanelsTabGroup">
            <li class="TabbedPanelsTab" tabindex="0">Central Schemes</li>
            <li class="TabbedPanelsTab" tabindex="0">UGC Schemes</li>
            <li class="TabbedPanelsTab" tabindex="0">Government Schemes</li>
            <!-- <li class="TabbedPanelsTab" tabindex="0">State Schemes</li> -->
        </ul>
        <div class="TabbedPanelsContentGroup">
            <div class="TabbedPanelsContent">
                <button class="accordion"><i class="fa fa-level-down"></i> &nbsp;Ministry of Education  </button>
                <div class="panel" style="padding:6px 0 2px 0;">
                    <div class="col-md-1"><i class="fa fa-dot-circle-o" aria-hidden="true"></i></div>
                    <div class="col-md-5">Top Class Education Scheme for SC Students</div>
                    <div class="col-md-2" style="background:#edfaec;">Open till 15-02-2019</div>
                    <div class="col-md-1"><a href="public/schemeGuidelines/Top_Class_Education_Scheme_2018.pdf" target="_blank">Guidelines</a></div>
                    <div class="col-md-1"><a href="#" onclick="alert('FAQ not available.'); return false;" target="_blank">FAQ</a></div>
                    <div class="col-md-2"><a href="fresh/loginPage.html" class="btn btn-danger">Apply</a></div>
                </div>
            </div>

            <div class="TabbedPanelsContent">
                <button class="accordion"><i class="fa fa-level-down"></i> &nbsp;University Grants Commission - Bangladesh  </button>
                <div class="panel" style="padding:6px 0 2px 0;">
                    <div class="col-md-1"><i class="fa fa-dot-circle-o" aria-hidden="true"></i></div>
                    <div class="col-md-5">NATIONAL SCHOLARSHIP FOR STUDENTS</div>
                    <div class="col-md-2" style="background:#edfaec;">Open till 30-02-2019</div>
                    <div class="col-md-1"><a href="public/schemeGuidelines/Guidelines_SGC1819.pdf" target="_blank">Guidelines</a></div>
                    <div class="col-md-1"><a href="public/FAQ/FAQ_SGC1819.pdf" target="_blank">FAQ</a></div>
                    <div class="col-md-2"><a href="fresh/loginPage.html" class="btn btn-danger">Apply</a></div>
                </div>


            </div>
            <div class="TabbedPanelsContent">
                <button class="accordion"><i class="fa fa-level-down"></i> &nbsp;Ministry of Social Welfare</button>
                <div class="panel" style="padding:6px 0 2px 0;">
                    <div class="col-md-1"><i class="fa fa-dot-circle-o" aria-hidden="true"></i></div>
                    <div class="col-md-5">SCHOLARSHIP SCHEME FOR CHILD OF GOVERNMENT EMPLOYEES</div>
                    <div class="col-md-2" style="background:#edfaec;">Opening Soon<br/>---</div>
                    <div class="col-md-1"><a href="#" onclick="alert('Guidelines not available.'); return false;" target="_blank">Guidelines</a></div>
                    <div class="col-md-1"><a href="#" onclick="alert('FAQ not available.'); return false;" target="_blank">FAQ</a></div>
                    
                </div>


            </div>
        <!--     <div class="TabbedPanelsContent">
                
                
                <button class="accordion"><i class="fa fa-level-down"></i> &nbsp;Assam</button>
                <div class="panel" style="padding:6px 0 2px 0;">
                    <div class="col-md-1"><i class="fa fa-dot-circle-o" aria-hidden="true"></i></div>
                    <div class="col-md-5">PRE MATRIC SCHOLARSHIP TO OBC STUDENTS -ASSAM</div>
                    <div class="col-md-2" style="background:#edfaec;">Open till 20-01-2019</div>
                    <div class="col-md-1"><a href="public/schemeGuidelines/PRE_MATRIC_OBC_GUIDELINES.pdf" target="_blank">Guidelines</a></div>
                    <div class="col-md-1"><a href="public/FAQ/FAQ_ASSAM.pdf" target="_blank">FAQ</a></div>
                    <div class="col-md-2"><a href="fresh/loginPage.html" class="btn btn-danger">Apply</a></div>
                    <div class="clearfix"></div>
                </div>
            </div> -->
        </div>
    </div>
</div>

@endsection