@extends('layouts.app')

@section('content')
<div class="wrapper-login">
    <div class="panel-body">
        <div class="logo">

        </div>
        <div class="container-logins">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Name" autofocus>

                        @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif

                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required>

                        @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif

                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                        <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

                        @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif

                </div>

                <div class="form-group">

                       <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>

                </div>

                <div class="form-group">
                    <div class="col-md-12 center-block ">
                        <button type="submit" class="btn customize-btnlogin">
                            Register
                        </button>
                    </div>
                    <div class="col-md-12 center-block">
                        <div class="con-reg">
                            <a href="{{ url('/login') }}">Back</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
