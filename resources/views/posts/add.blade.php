@extends('layouts.app')
@section('content')
    <div class="columns">
        @include('postSideBar')
        <div class="column is-8">
            <h4>Add a post</h4>
            <form class="form" action="{{ route('posts.insert') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="field">
                    <label class="label">Title</label>
                    <div class="control">
                        <input type="text" name="title">
                        @if($errors->has('title'))
                            <p class="help is-danger">{{ $errors->first('title') }}</p>
                        @endif
                    </div>
                </div>
                <div class="field">
                    <div class="control">
                        @include('components.select_category')
                    </div>
                </div>

                {{--<div class="field">--}}
                {{--<label class="label">Content</label>--}}
                {{--<div class="control">--}}
                {{--<textarea class="textarea" name="content"></textarea>--}}
                {{--@if($errors->has('content'))--}}
                {{--<p class="help is-danger">{{ $errors->first('content') }}</p>--}}
                {{--@endif--}}
                {{--</div>--}}
                {{--</div>--}}

            <!------------------------------- Quill editor ------------------------>
                <div class="field">
                    <label class="label">Content</label>
                    <div class="control">
                        <div id="post-editor"></div>
                    </div>
                </div>
                <input type="hidden" name="content">
                <p class="help is-danger"{{ $errors->first('content') }}></p>
                <input type="file" name="image" id="post-image"
                       style="display: none;"
                       onchange="uploadImage(event)" accept="image/*">
                <input type="hidden" name="email" value="{{ Auth::user()->email }}">
                <input type="hidden" name="api_token" value="{{ Auth::user()->api_token }}">

                <div class="field">
                    <label class="label">Publisher</label>
                    <div class="control">
                        <input type="text" name="publisher">
                        @if($errors->has('publisher'))
                            <p class="help is-danger">{{ $errors->first('publisher') }}</p>
                        @endif
                    </div>
                </div>
                {{--<div class="field">--}}
                {{--<label class="label">Image</label>--}}
                {{--<div class="control">--}}
                {{--<input type="file" name="img[]" id="image" multiple onchange="preview_images()">--}}
                {{--<div id="image_preview" class="columns">--}}
                {{--</div>--}}
                {{--@if($errors->has('img'))--}}
                {{--<p class="help is-danger">{{ $errors->first('img') }}</p>--}}
                {{--@endif--}}
                {{--@if($errors->has('img.*'))--}}
                {{--<p class="help is-danger">{{ $errors->first('img.*') }}</p>--}}
                {{--@endif--}}
                {{--</div>--}}
                {{--</div>--}}
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
@section('script')
    <script
            src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="{{ asset('js/quill-editor/post.js') }}" defer></script>
@endsection