@extends('Front/layouts/master')

@section('content')
    <section class="content-header">
        <h1>
            Student Application for National Issue
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($stdApplyNationalIssu, ['route' => ['frontend.stdApplyNationalIssus.update', $stdApplyNationalIssu->id], 'method' => 'patch']) !!}

                        @include('frontend.std_apply_national_issus.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection