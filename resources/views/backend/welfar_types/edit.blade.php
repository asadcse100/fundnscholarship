@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Types of Welfare
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($welfarType, ['route' => ['backend.welfarTypes.update', $welfarType->id], 'method' => 'patch']) !!}

                        @include('backend.welfar_types.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection