@extends('layouts.app')
@section('content')
    <div class="columns">
        @include('admin.users.sidebar')
        <div class="column is-8">
            <section>
                <h3 class=""> Change Password </h3>
                <form class="form" action="{{ route('admin.users.update_password') }}"
                      method="post">
                    {{ csrf_field() }}
                    <div class="field">
                        <label class="label">Old password</label>
                        <div class="control">
                            <input class="input {{ $errors->has('old_password') ? 'is_danger':'' }}" type="password"
                                   required name="old_password">
                            @if($errors->has('old_password'))
                                <p class="help is-danger">{{ $errors->first('old_password') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">New password</label>
                        <div class="control">
                            <input class="input {{ $errors->has('new_password') ? 'is_danger':'' }}" type="password"
                                   required name="new_password">
                            @if($errors->has('new_password'))
                                <p class="help is-danger">{{ $errors->first('new_password') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Confirm new password</label>
                        <div class="control">
                            <input class="input {{ $errors->has('new_password_confirmation') ? 'is_danger':'' }}"
                                   type="password"
                                   required name="new_password_confirmation">
                            @if($errors->has('new_password_confirmation'))
                                <p class="help is-danger">{{ $errors->first('new_password_confirmation') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <input type="submit" value="Change Password">
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
@endsection