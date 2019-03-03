<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Scholarship portal | Registration Page</title>

    @include('layouts.partials.style')

</head>
<body class="hold-transition register-page">
<div class="register-box">
    <div class="register-logo">
        <a href="{{ url('/home') }}"><b> Individual </b>Registration</a>
    </div>

    <div class="register-box-body">
        <p class="login-box-msg">Register a new member</p>

        <form method="post" action="{{ url('/register') }}">

            {!! csrf_field() !!}

            <div class="form-group has-feedback{{ $errors->has('f_name') ? ' has-error' : '' }}">
                <input required type="text" class="form-control" name="f_name" value="{{ old('name') }}" placeholder="First Name">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>

                @if ($errors->has('f_name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('f_name') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group has-feedback{{ $errors->has('l_name') ? ' has-error' : '' }}">
                <input required type="text" class="form-control" name="l_name" value="{{ old('name') }}" placeholder="Last Name">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>

                @if ($errors->has('l_name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('l_name') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                <input required type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group has-feedback{{ $errors->has('phone') ? ' has-error' : '' }}">
                <input required type="text" class="form-control" name="phone" value="{{ old('phone') }}" placeholder="phone">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

                @if ($errors->has('phone'))
                    <span class="help-block">
                        <strong>{{ $errors->first('phone') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group has-feedback{{ $errors->has('address') ? ' has-error' : '' }}">
                <input required type="text" class="form-control" name="address" value="{{ old('address') }}" placeholder="address">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

                @if ($errors->has('address'))
                    <span class="help-block">
                        <strong>{{ $errors->first('address') }}</strong>
                    </span>
                @endif
            </div>


            <div class="form-group has-feedback{{ $errors->has('district') ? ' has-error' : '' }}">
                <input required type="district" class="form-control" name="district" placeholder="district">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                @if ($errors->has('district'))
                    <span class="help-block">
                        <strong>{{ $errors->first('district') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group has-feedback{{ $errors->has('nid') ? ' has-error' : '' }}">
                <input required type="nid" class="form-control" name="nid" placeholder="NID Number">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                @if ($errors->has('nid'))
                    <span class="help-block">
                        <strong>{{ $errors->first('nid') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                <input required type="password" class="form-control" name="password" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group has-feedback{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                <input required type="password" name="password_confirmation" class="form-control" placeholder="Confirm password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                @endif
            </div>



            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input required type="checkbox"> I agree to the <a href="#">terms</a>
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        I already have a membership <a href="{{ url('/login') }}" class="text-center">Sign In</a>
    </div>
    <!-- /.form-box -->
</div>
<!-- /.register-box -->

@include('layouts.partials.js')
</body>
</html>
