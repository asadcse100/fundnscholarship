@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Innovation Type
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($innovationType, ['route' => ['backend.innovationTypes.update', $innovationType->id], 'method' => 'patch']) !!}

                        @include('backend.innovation_types.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection