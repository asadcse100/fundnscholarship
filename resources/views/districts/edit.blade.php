@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Districts
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($district, ['route' => ['districts.update', $district->id], 'method' => 'patch']) !!}

                        @include('districts.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection