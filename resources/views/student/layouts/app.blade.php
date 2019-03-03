<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} :: Student</title>


    @include('student.partials.style')

</head>
<body>
    @include('student.partials.header')



        <div class="clearfix">&nbsp;</div>
        <div class="row-fluid">
            <div class="my-container">
                <div class="helpdesk">

                  @include('Front.Partials.sidebar')

                   @yield('content')

                </div>

            </div>
            <div class="clearfix">&nbsp;</div>
            <div class="clearfix">&nbsp;</div>
            
            @include('Front.Partials.footer')
        </div>




 @include('student.partials.script')
</body>
</html>

