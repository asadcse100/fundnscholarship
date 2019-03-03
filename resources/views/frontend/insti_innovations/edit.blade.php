@extends('Front/layouts/master')

@section('content')
    <section class="content-header">
        <h1>
            Institutional Innovation
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($instiInnovation, ['route' => ['frontend.instiInnovations.update', $instiInnovation->id], 'method' => 'patch']) !!}

                        @include('frontend.insti_innovations.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection