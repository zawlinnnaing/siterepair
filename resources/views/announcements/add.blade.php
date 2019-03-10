@extends('layouts.app')
@section('content')
    <div class="columns">
        @include('postSideBar')
        <div class="column is-8">
            @if(Session::has('msg'))
                <p class="is-success">{{ Session::get('msg') }}</p>
            @endif
            <h4>Add an announcement</h4>
            <form class="form" action="{{ route('announcements.insert') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{--<div class="field">--}}
            {{--<label class="label">Content</label>--}}
            {{--<div class="control">--}}
            {{--<textarea class="textarea" name="content" required></textarea>--}}
            {{--@if($errors->has('content'))--}}
            {{--<p class="help is-danger">{{ $errors->first('content') }}</p>--}}
            {{--@endif--}}
            {{--</div>--}}
            {{--</div>--}}

            <!------------------------------- Testing quill editor ------------------------>
                <input type="hidden" name="content">
                <div class="field">
                    <div class="control">
                        <div id="editor"></div>
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
@endsection
@section('style')
    <style type="text/css">
        .is-8 {
            display: block;
            margin: 0 auto;
        }

        #editor {
            height: 250px;
        }
    </style>
@endsection
@section('script')
    <script type="application/javascript">
        var quill = new Quill('#editor', {
            theme: 'snow'
        });
        editorContent = document.querySelector('input[name=content]');
        quill.on('text-change', function (delta, oldDelta, source) {
            if (source === 'user') {
                console.log(quill.root.innerHTML);
                editorContent.value = quill.root.innerHTML;
            }
        })
    </script>
@endsection
