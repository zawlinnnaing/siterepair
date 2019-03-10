@extends('layouts.app')

@section('style')
    <style type="text/css">
        .is-error {
            color: #ff3860;
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <h4>Login</h4>
                    <div class="column is-8">
                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <div class="field{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="label">E-Mail Address</label>

                                <div class="control">
                                    <input id="email" type="email"
                                           class="input {{$errors->has('email') ? 'is-danger':''}}"
                                           name="email"
                                           value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="is-danger">
                                        <strong class="is-error">{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="field{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="label">Password</label>

                                <div class="control">
                                    <input id="password" type="password" class="input" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"
                                                   name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="field">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="button is-link">
                                        Login
                                    </button>
                                    {{--<a class="button is-link" href="{{ route('password.request') }}">--}}
                                    {{--Forgot Your Password?--}}
                                    {{--</a>--}}
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
