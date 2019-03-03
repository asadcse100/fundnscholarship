@extends('Front/layouts/master')

@section('content')
    <section class="content-header">
        <h1>
            Complain
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($complain, ['route' => ['frontend.complains.update', $complain->id], 'method' => 'patch']) !!}

                        @include('frontend.complains.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection