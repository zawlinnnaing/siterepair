@extends('layouts.app')
@section('content')
    <div class="columns">
        @include('admin.users.sidebar')
        <div class="column is-8">
            <section>
                <h3>Add a user</h3>
                <form action="{{ route('users.store') }}" method="post">
                    {{csrf_field()}}
                    <div class="field">
                        <label class="label">Name</label>
                        <div class="control">
                            <input class="input {{ $errors->has('name')? 'is-danger':'' }}"
                                   name="name" type="text" required>
                            @if($errors->has('name'))
                                <p class="help is-danger">{{ $errors->first('name') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Email</label>
                        <div class="control">
                            <input class="input {{ $errors->has('email')? 'is-danger':'' }}"
                                   name="email" type="email" required>
                            @if($errors->has('email'))
                                <p class="help is-danger">{{ $errors->first('email') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Password</label>
                        <div class="control">
                            <input class="input {{ $errors->has('password')? 'is-danger':'' }}"
                                   name="password" type="password" required>
                            @if($errors->has('password'))
                                <p class="help is-danger">{{ $errors->first('password') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <button class="button submit-button" type="submit">
                                Submit
                            </button>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
@endsection
@section('style')
    <style type="text/css">
        .submit-button {
            margin: 0;
        }
    </style>
@endsection