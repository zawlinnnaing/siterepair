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
                <td>id</td>
                <td>Title</td>
                <td>Operations</td>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ ucwords($category->title) }}</td>
                        <td><a href="{{ route('categories.edit',['id' => $category->id]) }}"
                               class="button edit">Edit</a>
                            <form action="{{ route('categories.destroy',['id'=> $category->id]) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" class="form-button delete">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
