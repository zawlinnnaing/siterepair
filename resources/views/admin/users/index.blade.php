@extends('layouts.app')
@section('content')
    <div class="columns">
        @include('admin.users.sidebar')
        <div class="column">
            @if(Session::has('msg'))
                <p class="is-success">{{ Session::get('msg') }}</p>
            @endif
            <table class="table">
                <thead>
                <td>Name</td>
                <td>Email</td>
                <td>Operations</td>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td><a href="{{ route('users.edit',['id' => $user->id]) }}"
                               class="button edit">Edit</a>
                            @if($user->id != Auth::user()->id)
                                <form style="display: inline"
                                      action="{{ route('users.destroy',['id'=> $user->id]) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="form-button delete">Delete</button>
                                </form>
                        </td>
                        @endif
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $users->links() }}
        </div>
    </div>

@endsection