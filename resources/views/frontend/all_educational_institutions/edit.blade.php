@extends('Front/layouts/master')

@section('content')
    <section class="content-header">
        <h1>
            All Educational Institution
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($allEducationalInstitution, ['route' => ['frontend.allEducationalInstitutions.update', $allEducationalInstitution->id], 'method' => 'patch']) !!}

                        @include('frontend.all_educational_institutions.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection