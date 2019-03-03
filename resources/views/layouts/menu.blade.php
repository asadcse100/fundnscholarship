<li class="{{ Request::is('stdClasses*') ? 'active' : '' }}">
    <a href="{!! route('backend.stdClasses.index') !!}"><i class="fa fa-edit"></i><span>Std Classes</span></a>
</li>

<li class="{{ Request::is('stdClassYears*') ? 'active' : '' }}">
    <a href="{!! route('backend.stdClassYears.index') !!}"><i class="fa fa-edit"></i><span>Std Class Years</span></a>
</li>


<li class="{{ Request::is('divisions*') ? 'active' : '' }}">
    <a href="{!! route('divisions.index') !!}"><i class="fa fa-edit"></i><span>Divisions</span></a>
</li>

<li class="{{ Request::is('districts*') ? 'active' : '' }}">
    <a href="{!! route('districts.index') !!}"><i class="fa fa-edit"></i><span>Districts</span></a>
</li>

<li class="{{ Request::is('welfarTypes*') ? 'active' : '' }}">
    <a href="{!! route('backend.welfarTypes.index') !!}"><i class="fa fa-edit"></i><span>Welfar Types</span></a>
</li>

<li class="{{ Request::is('innovationTypes*') ? 'active' : '' }}">
    <a href="{!! route('backend.innovationTypes.index') !!}"><i class="fa fa-edit"></i><span>Innovation Types</span></a>
</li>

<li class="{{ Request::is('studentApplyResults*') ? 'active' : '' }}">
    <a href="{!! route('studentApplyResults.index') !!}"><i class="fa fa-edit"></i><span>Student Apply Results</span></a>
</li>

<li class="{{ Request::is('studentApplyProjects*') ? 'active' : '' }}">
    <a href="{!! route('studentApplyProjects.index') !!}"><i class="fa fa-edit"></i><span>Student Apply Projects</span></a>
</li>

<li class="{{ Request::is('studentApplyInnovations*') ? 'active' : '' }}">
    <a href="{!! route('studentApplyInnovations.index') !!}"><i class="fa fa-edit"></i><span>Student Apply Innovations</span></a>
</li>

<li class="{{ Request::is('studentApplyIssues*') ? 'active' : '' }}">
    <a href="{!! route('studentApplyIssues.index') !!}"><i class="fa fa-edit"></i><span>Student Apply Issues</span></a>
</li>

<li class="{{ Request::is('studentApplyPoorFunds*') ? 'active' : '' }}">
    <a href="{!! route('studentApplyPoorFunds.index') !!}"><i class="fa fa-edit"></i><span>Student Apply Poor Funds</span></a>
</li>

<li class="{{ Request::is('instiWelfares*') ? 'active' : '' }}">
    <a href="{!! route('backend.instiWelfares.index') !!}"><i class="fa fa-edit"></i><span>Institute Welfare</span></a>
</li>

<li class="{{ Request::is('instiInnovations*') ? 'active' : '' }}">
    <a href="{!! route('backend.instiInnovations.index') !!}"><i class="fa fa-edit"></i><span>Institute Innovation</span></a>
</li>

<li class="{{ Request::is('indisiInnovations*') ? 'active' : '' }}">
    <a href="{!! route('backend.indivisiInnovations.index') !!}"><i class="fa fa-edit"></i><span>Indivisual Innovation</span></a>
</li>

<li class="{{ Request::is('indisiNationals*') ? 'active' : '' }}">
    <a href="{!! route('backend.indivisiNationals.index') !!}"><i class="fa fa-edit"></i><span>Indivisual National</span></a>
</li>


<li class="{{ Request::is('ministies*') ? 'active' : '' }}">
    <a href="{!! route('backend.ministies.index') !!}"><i class="fa fa-edit"></i><span>Ministies</span></a>
</li>

<li class="{{ Request::is('complains*') ? 'active' : '' }}">
    <a href="{!! route('backend.complains.index') !!}"><i class="fa fa-edit"></i><span>Complains</span></a>
</li>

<li class="{{ Request::is('allEducationalInstitutions*') ? 'active' : '' }}">
    <a href="{!! route('backend.allEducationalInstitutions.index') !!}"><i class="fa fa-edit"></i><span>All Educational Institutions</span></a>
</li>


