@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            All Educational Institutions
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($allEducationalInstitution, ['route' => ['backend.allEducationalInstitutions.update', $allEducationalInstitution->id], 'method' => 'patch']) !!}

                        @include('backend.all_educational_institutions.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection