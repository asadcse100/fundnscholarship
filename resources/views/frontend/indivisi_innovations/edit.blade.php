@extends('Front/layouts/master')

@section('content')
    <section class="content-header">
        <h1>
            Individual Application for Innovation
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($indivisiInnovation, ['route' => ['frontend.indivisiInnovations.update', $indivisiInnovation->id], 'method' => 'patch']) !!}

                        @include('frontend.indivisi_innovations.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection