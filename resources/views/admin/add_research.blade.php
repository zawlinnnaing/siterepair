@extends('layouts.app') @section('content')
    <div class="columns">
        @include('depSideBar')
        <div class="column">
            @if(Session::has('msg'))
                <p class="is-success">{{ Session::get('msg') }}</p>
            @endif
            <form action="{{ route('admin.insert_research') }}" method="POST"
                  enctype="multipart/form-data">
                {{ csrf_field() }}
                <h3>Select a major</h3>
                <div class="field">
                    @include('admin.selectDep')
                </div>
                <div class="field">
                    <label class="label">Image</label>
                    <div class="control">
                        <input type="file" name="img_dir">
                        @if($errors->has('img_dir'))
                            <p class="help is-danger">{{ $errors->first('img_dir') }}</p>
                        @endif
                    </div>
                </div>
                <div class="field">
                    <label class="label">Title</label>
                    <div class="control">
                        <input type="text" name="title" class="input" required> @if($errors->has('title'))
                            <p class="help is-danger">{{ $errors->first('title') }}</p>
                        @endif
                    </div>
                </div>
                <div class="field">
                    <label class="label">Year</label>
                    <div class="control">
                        <input type="text" name="year" class="input"> @if($errors->has('year'))
                            <p class="help is-danger">{{ $errors->first('year') }}</p>
                        @endif
                    </div>
                </div>
                <div class="field">
                    <label class="label">Description</label>
                    <div class="control">
                        <textarea class="textarea" name="description"></textarea>
                        @if($errors->has('description'))
                            <p class="help is-danger">{{ $errors->first('description') }}</p>
                        @endif
                    </div>
                </div>
                <div class="field">
                    <input type="submit" name="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
@endsection