@extends('layouts.app')
@section('content')
<div class="wrapper-login">
    <div class="panel-body">
        <div class="logo">

        </div>
        <div class="container-logins">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" autofocus>

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
                        <div class="col-md-12 center-block">
                            <button type="submit" class="btn customize-btnlogin">
                                Login
                            </button>
                        </div>
                        <div class="col-md-12 center-block">
                            <div class="con-reg">
                                <a href="{{ url('/register') }}">Register</a>
                            </div>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>
@endsection
