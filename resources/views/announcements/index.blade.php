@extends('layouts.app')
@section('content')
    <div class="columns">
        @include('postSideBar')

        <div class="column">
            @if(Session::has('msg'))
                <p class="is-success">{{ Session::get('msg') }}</p>
            @endif
            <table class="table">
                <thead>
                <td>Content</td>
                <td>Created at</td>
                </thead>
                <tbody>
                @foreach($announcements as $announcement)
                    <tr>
                        <td>{{ $announcement->content }}</td>
                        <td>{{ $announcement->created_at }}</td>
                        <td><a href="{{ route('announcements.edit',['id' => $announcement->id]) }}" class="button edit">Edit</a>
                            <a href="{{ route('announcements.delete',['id' => $announcement->id]) }}" class="button delete delete-btn">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
@section('style')
    <style type="text/css">
        .button {
            padding: 0.5em 1em;
            border-radius: 3px;
            margin: 0 1em;
        }

        a.edit {
            background-color: #1E88E5;
            color: #FFFFFF;
            text-decoration: none;
        }

        a.delete {
            background-color: #EF6C00;
            color: #FFFFFF;
            text-decoration: none;
        }
    </style>
@endsection