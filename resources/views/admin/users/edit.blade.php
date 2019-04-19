@extends('layouts.app')
@section('content')
    <div class="columns">
        @include('admin.users.sidebar')
        <div class="column is-8">
            <section>
                <h3>Edit user</h3>
                @if(Session::has('msg'))
                    <p class="is-success">{{ Session::get('msg') }}</p>
                @endif
                <form action="{{ route('users.update',['id' => $user->id]) }}" method="post">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                    <div class="field">
                        <label class="label">Name</label>
                        <div class="control">
                            <input class="input {{ $errors->has('name')? 'is-danger':'' }}"
                                   name="name" type="text"
                                   value="{{ $user->name }}"
                                   required>
                            @if($errors->has('name'))
                                <p class="help is-danger">{{ $errors->first('name') }}</p>
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