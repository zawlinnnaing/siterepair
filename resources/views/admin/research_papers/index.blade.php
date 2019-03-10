@extends('layouts.app')
@section('content')
    <div class="columns">
        @include('depSideBar')
        <div class="column">
            @if(Session::has('msg'))
                <p class="is-success">{{ Session::get('msg') }}</p>
            @endif
            <table class="table">
                <thead>
                <td>Title</td>
                <td>Author</td>
                <td>Link</td>
                <td>Operations</td>
                </thead>
                <tbody>
                @foreach($papers as $paper)
                    <tr>
                        <td>{{ $paper->title }}</td>
                        <td>{{ ucwords($paper->author) }}</td>
                        @if($paper->link)
                            <td><a href="{{$paper->link}}" target="_blank"><i class="fas fa-external-link-alt"></i></a>
                            </td>
                        @else
                            <td>No paper link</td>
                        @endif
                        <td><a href="{{ route('research_papers.edit',['id' => $paper->id]) }}"
                               class="button edit">Edit</a>
                            <form action="{{ route('research_papers.destroy',['id'=> $paper->id]) }}" method="POST">
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