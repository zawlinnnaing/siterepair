@extends('layouts.app')
@section('content')
    <div class="columns">
        @include('depSideBar')
        <div class="column">
            <div class="form">
                <form action="{{route('research_papers.store')}}" method="POST">
                    {{ csrf_field() }}
                    <h3>Research Papers</h3>
                    @if(Session::has('msg'))
                        <p class="is-success">{{ Session::get('msg') }}</p>
                    @endif
                    <div class="field">
                        @include('admin.selectDep')
                    </div>
                    <div class="field">
                        <label class="label">Title</label>
                        <div class="control">
                            <input class="input {{ $errors->has('title')? 'is-danger':'' }}" type="text" name="title"
                                   value="{{ old('title') }}"
                                   required>
                        </div>
                        <p class="help is-danger">{{ $errors->first('title') }}</p>
                    </div>
                    <div class="field">
                        <label class="label">Author</label>
                        <div class="control">
                            <input class="input {{ $errors->has('author')? 'is-danger':'' }}" type="text" name="author"
                                   value="{{ old('author') }}" required>
                        </div>
                        <p class="help is-danger">{{ $errors->first('author') }}</p>
                    </div>
                    <div class="field">
                        <label class="label">Link to Paper</label>
                        <div class="control">
                            <input class="input {{ $errors->has('link')? 'is-danger':'' }}" type="url" name="link"
                                   value="{{ old('link') }}">
                        </div>
                        <p class="help is-danger">{{ $errors->first('link') }}</p>
                    </div>
                    <div class="field">
                        <div class="control">
                            <input type="submit" class="button">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection