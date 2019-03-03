@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Student Apply Innovation
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($studentApplyInnovation, ['route' => ['studentApplyInnovations.update', $studentApplyInnovation->id], 'method' => 'patch']) !!}

                        @include('student_apply_innovations.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection