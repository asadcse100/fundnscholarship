@extends('Front/layouts/master')
@section('content')
    <section class="content-header">
        <h1>
            Student Application for Project
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($stdApplyProject, ['route' => ['frontend.stdApplyProjects.update', $stdApplyProject->id], 'method' => 'patch']) !!}

                        @include('frontend.std_apply_projects.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection