@extends('Front/layouts/master')

@section('content')
    <section class="content-header">
        <h1>
            Student Application from Poor Fund
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($stdApplyPoorFund, ['route' => ['frontend.stdApplyPoorFunds.update', $stdApplyPoorFund->id], 'method' => 'patch']) !!}

                        @include('frontend.std_apply_poor_funds.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection