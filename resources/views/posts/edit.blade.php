@extends('layouts.app')
@section('content')
    <div class="column is-8">
        <h4>Edit a post</h4>
        <form class="form" action="{{ route('posts.update',['id' => $post->id]) }}" method="POST"
              enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="field">
                <label class="label">Title</label>
                <div class="control">
                    <input type="text" name="title" value="{{ $post->title }}">
                    @if($errors->has('title'))
                        <p class="help is-danger">{{ $errors->first('title') }}</p>
                    @endif
                </div>
            </div>
            <div class="field">
                <label class="label">Content</label>
                <div class="control">
                    <div id="post-editor">
                        {!! $post->content !!}
                    </div>
                </div>
            </div>
            <input type="hidden" name="content">
            <p class="help is-danger"{{ $errors->first('content') }}></p>
            <input type="file" name="image" id="post-image"
                   style="display: none;"
                   onchange="uploadImage(event)" accept="image/*">
            <div class="field">
                <label class="label">Publisher</label>
                <div class="control">
                    <input type="text" name="publisher" value="{{ $post->publisher }}">
                    @if($errors->has('publisher'))
                        <p class="help is-danger">{{ $errors->first('publisher') }}</p>
                    @endif
                </div>
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
@endsection @section('style')
    <style type="text/css">
        .is-8 {
            display: block;
            margin: 0 auto;
        }
    </style>
@endsection
@section('script')
    <script
            src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="{{ asset('js/quill-editor/post.js') }}" defer></script>
@endsection