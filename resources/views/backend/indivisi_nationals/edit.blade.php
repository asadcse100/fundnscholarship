@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Individual National Issues Work
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($indivisiNational, ['route' => ['backend.indivisiNationals.update', $indivisiNational->id], 'method' => 'patch']) !!}

                        @include('backend.indivisi_nationals.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection