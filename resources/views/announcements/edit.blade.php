@extends('layouts.app')
@section('content')
    <div class="columns">
        @include('postSideBar')
        <div class="column is-8">
            @if(Session::has('msg'))
                <p class="is-success">{{ Session::get('msg') }}</p>
            @endif
            <h4>Edit an announcement</h4>
            <form class="form" action="{{ route('announcements.update',['id' => $announcement->id]) }}" method="POST"
                  enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="content" value="{{ $announcement->content }}">
                <div class="field">
                    <div class="control">
                        <div id="editor">
                            {!!  $announcement->content !!}
                        </div>
                    </div>
                    <p class="help is-danger">{{ $errors->first('content') }}</p>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <input type="submit" name="submit" value="Submit">
                    </div>
                    <div class="control">
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection @section('style')
    <style type="text/css">
        .is-8 {
            display: block;
            margin: 0 auto;
        }
    </style>
@endsection
