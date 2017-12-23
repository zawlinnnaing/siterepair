@extends('layouts.app') @section('content')
    <div class="columns">
        @include('depSideBar')
        <div class="column">
            <div class="content">
                <h3>Edit a department</h3>
                @if(Session::has('msg'))
                    <p class="is-success">{{ Session::get('msg') }}</p>
                @endif
                <form action="{{ route('admin.updateDep',$dep->name) }}" method="POST">
                    {{ csrf_field() }}
                    <h5>Department name : {{ ucwords($dep->name) }}</h5>
                    <div class="field">
                        <label class="label">History</label>
                        <div class="control">
                            <textarea name="history"
                                      class="textarea">{{ $dep->history }}</textarea> @if($errors->has('history'))
                                <p class="help is-danger">{{ $errors->first('history') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Mission</label>
                        <div class="control">
                            <textarea name="mission"
                                      class="textarea">{{ $dep->mission }}</textarea> @if($errors->has('mission'))
                                <p class="help is-danger">{{ $errors->first('mission') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Vision</label>
                        <div class="control">
                            <textarea name="vision"
                                      class="textarea">{{ $dep->vision }}</textarea>@if($errors->has('vision'))
                                <p class="help is-danger">{{ $errors->first('vision') }}</p>
                            @endif
                        </div>
                    </div>
                    @if($dep->degrees->count() > 0)
                        <h4>Degrees</h4>
                        @foreach($dep->degrees as $index)
                            <div class="field" id="{{ $index->id.'deg' }}">
                                <div class="control">
                                    <input type="text" name="deg_title[{{ $index->id }}}]"
                                           value="{{ $index->deg_title }}"/>
                                    <a class="delete-deg" id="{{ $index->id }}">Delete
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    @if($dep->research->count() > 0)
                        <h4>Research</h4>
                        @foreach($dep->research as $index)
                            <div class="field" id="{{ $index->id.'research' }}">
                                <img src="{{ asset('uploads/'.$index->img_dir) }}" class="image is-128x128">
                                <input type="text" name="title[{{ $index->id }}]" value="{{ $index->title }}">
                                <input type="text" name="year[{{ $index->id }}]" value="{{ $index->year }}">
                                <textarea class="textarea"
                                          name="description[{{ $index->id }}]">{{ $index->description }}</textarea>
                                <a class="delete-research" id="{{ $index->id }}">Delete
                                </a>
                            </div>
                        @endforeach
                    @endif
                    <div class="field">
                        <input type="submit" name="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript">
        $(document).ready(function () {
            $('.delete-deg').click(function (e) {
                e.preventDefault();
                if (confirm('Are you sure')) {
                    var id = $(this).attr('id');
                    $.get('/admin/delete_deg/' + id, function () {
                        $('#' + id + 'deg').remove();
                    });
                }
            });

            $('.delete-research').click(function (e) {
                if (confirm('Are you sure')) {
                    var id = $(this).attr('id');
                    $.get('/admin/delete_research/' + id, function () {
                        $('#' + id + 'research').remove();
                    });
                }
            });
        });

    </script>
@endsection