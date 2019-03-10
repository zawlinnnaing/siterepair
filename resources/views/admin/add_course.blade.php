@extends('layouts.app')
@section('style')
    <style type="text/css">
        #add_btn {
            margin: 2em 0em;
        }
    </style>
@endsection
@section('content')
    <div class="columns">
        @include('depSideBar')
        <div class="column">
            @if(Session::has('msg'))
                <p class="is-success">{{ Session::get('msg') }}</p>
            @endif
            <form action="{{ route('admin.insert_course') }}" method="POST">
                {{ csrf_field() }}
                <h3>Select a major</h3>
                <div class="field">
                    @include('admin.selectDep')
                </div>
                <div class="wrapper">
                    <div class="name_and_number">
                        <div class="field">
                            <label class="label">
                                Course title
                            </label>
                            <div class="control">
                                <input type="text" name="title[]" required class="input">
                            </div>
                            @if($errors->has('title'))
                                <p class="help is-danger">{{ $errors->first('title') }}</p>
                            @endif
                        </div>
                        <div class="field">
                            <label class="label">Course Number</label>
                            <div class="control">
                                <input type="text" name="course_number[]" class="input" required
                                       placeholder="ME-20134,etc..."> @if($errors->has('course_number'))
                                    <p class="help is-danger">{{ $errors->first('course_number') }}</p>
                                @endif
                            </div>
                        </div>
                        {{--<button class="remove_btn">Remove this course</button>--}}
                    </div>
                </div>
                <button id="add_btn">Add More Course</button>

                <div class="field">
                    <label class="label">Course Type</label>
                    <div class="control">
                        <select name="course_type" class="select">
                            <option value="first">First Semester</option>
                            <option value="second">Second Semester</option>
                        </select> @if($errors->has('course_type'))
                            <p class="help is-danger">{{ $errors->first('course_type') }}</p>
                        @endif
                    </div>
                </div>
                <div class="field">
                    <label class="label">Course Year</label>
                    <div class="control">
                        <select name="course_year" class="select">
                            <option value="first">First Year</option>
                            <option value="second">Second Year</option>
                            <option value="third">Third Year</option>
                            <option value="fourth">Fourth Year</option>
                            <option value="fifth">Fifth Year</option>
                            <option value="final">Fianl Year</option>
                        </select>
                    </div>
                    @if($errors->has('course_year'))
                        <p class="help is-danger">{{ $errors->first('course_year') }}</p>
                    @endif
                </div>
                @include('components.select_course_level')
                <div class="field">
                    <input type="submit" name="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function () {
            var wrapper = $(".wrapper");
            var addBtn = $("#add_btn");
            $("#add_btn").on("click", function (e) {
                e.preventDefault();
                $(wrapper).append("<div class=\"name_and_number\">\n" +
                    "                        <div class=\"field\">\n" +
                    "                            <label class=\"label\">\n" +
                    "                                Course title\n" +
                    "                            </label>\n" +
                    "                            <div class=\"control\">\n" +
                    "                                <input type=\"text\" name=\"title[]\" required class=\"input\">\n" +
                    "                                @if($errors->has('title'))\n" +
                    "                                    <p class=\"help is-danger\">{{ $errors->first('title') }}</p>\n" +
                    "                                @endif\n" +
                    "                            </div>\n" +
                    "                        </div>\n" +
                    "                        <div class=\"field\">\n" +
                    "                            <label class=\"label\">Course Number</label>\n" +
                    "                            <div class=\"control\">\n" +
                    "                                <input type=\"text\" name=\"course_number[]\" class=\"input\" required\n" +
                    "                                       placeholder=\"ME-20134,etc...\"> @if($errors->has('course_number'))\n" +
                    "                                    <p class=\"help is-danger\">{{ $errors->first('course_number') }}</p>\n" +
                    "                                @endif\n" +
                    "                            </div>\n" +
                    "                        </div>\n" +
                    "                        <button class=\"remove_btn\">Remove this course</button>\n" +
                    "                    </div>");
                // $(wrapper).append("<h1>Test</h1>");
            });
            $(wrapper).on("click", ".remove_btn", function (e) {
                e.preventDefault();
                $(this).parent('div').remove();

            });
        });
    </script>
@endsection