@extends('layouts.app')
@section('content')
    <div class="columns">
        @include('postSideBar')
        <div class="column">
            <div class="form">
                <form action="{{route('categories.update',['id' => $category->id])}}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <h3>Add Category</h3>
                    @if(Session::has('msg'))
                        <p class="is-success">{{ Session::get('msg') }}</p>
                    @endif
                    <div class="field">
                        <label class="label">Title</label>
                        <div class="control">
                            <input class="input {{ $errors->has('title')? 'is-danger':'' }}" type="text" name="title"
                                   value="{{ $category->title }}"
                                   required>
                        </div>
                        <p class="help is-danger">{{ $errors->first('title') }}</p>
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