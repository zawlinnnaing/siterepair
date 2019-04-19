@extends('layouts.app')
@section('content')
    <div class="columns">
        @include('admin.users.sidebar')
        <div class="column">
            @foreach($users as $user)
                <p>{{ $user->name }}</p>
            @endforeach
        </div>
    </div>

@endsection