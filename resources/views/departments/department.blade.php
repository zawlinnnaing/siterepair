@extends('layout') @section('content')
    <!-- Header section -->
    <div id="landing">
        @include('header')
        <h4>{{ ucwords($dep->name) }}</h4>
        <div class="brief_history column is-8">
            <p>{!! $dep->history !!}}</p>
        </div>
        <div class="detail_button">
            <h5>Read More</h5>
        </div>
    </div>
    <!-- End header section -->
    <!-- Secondary navbar -->
    <div id="secondary_navbar">
        <a href="#mission_vision">Mission &amp; Vision</a>
        <a href="#offered_degrees">Offered Degrees</a>
        <a href="#research_facilities">Research Facilities</a>
        <a href="#courses">Courses</a>
        <a href="#staff">Staff</a>
    </div>
    <!-- End secondory navbar -->
    <div class="dep_content">
        <!-- Mission and vision -->
        <div class="mission_vision" id="mission_vision">
            <div class="columns">
                <div class="column is-2"></div>
                <div class="column content">
                    <span>M</span>
                    <h4>ission</h4>
                    <p>{!! $dep->mission !!}</p>
                </div>
                <div class="column is-2"></div>
            </div>
            <div class="columns">
                <div class="column is-2 bg_black"></div>
                <div class="column align_right content">
                    <span class="float_right">V</span>
                    <h4 class="align_right">ision</h4>
                    <p class="align_right">{!! $dep->vision !!}</p>
                </div>
                <div class="column is-2 bg_black"></div>
            </div>
        </div>
        <!-- End mission and vision -->
        <!-- Offered degrees -->
        <div class="offered_degrees" id="offered_degrees">
            <div class="column is-8">
                <div class="columns">
                    <div class="column undergrad">
                        <div>
                            <h5 style="text-align: center;">Undergraduate Offered Degrees</h5>
                            <ul>
                                @foreach($dep->degrees as $index) @if($index->type == 'undergraduate')
                                    <li>{{ $index->deg_title }}</li>
                                @endif @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="column postgrad">
                        <div>
                            <h5 style="text-align: center;">Postgraduate Offered Degrees</h5>
                            <ul>
                                @foreach($dep->degrees as $index) @if($index->type == 'postgraduate')
                                    <li>{{ $index->deg_title }}</li>
                                @endif @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End offered degrees -->
        <!-- Research facilities -->
        <div class="research_facilities" id="research_facilities">
            <div class="column is-10">
                <h5>Research Facilities</h5>
                <div class="gallery">
                    @foreach($dep->research as $index)
                        @if ($loop->index % 3 == 0 )
                            <div class="columns">
                                @endif
                                <div class="column">
                                    @if(empty($index->img_dir))
                                        <a href="{{ asset('uploads/no-image-available.png') }}"
                                           data-caption="{{ $index->description }}">
                                            <div class="image is-3by2">
                                                <img src="{{ asset('uploads/no-image-available.png') }}"/>
                                                <p class="overlay_text">{{ $index->title }}</p>
                                            </div>
                                        </a>
                                    @else
                                        <a href="{{ asset('uploads/'.$index->img_dir) }}"
                                           data-caption="{{ $index->description }}">
                                            <div class="image is-3by2">
                                                <img src="{{ asset('uploads/'.$index->img_dir) }}"/>
                                                <p class="overlay_text">{{ $index->title }}</p>
                                            </div>
                                        </a>
                                    @endif
                                </div>
                                @if((++$loop->index) % 3 == 0)
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- End research facilities -->
    <!-- Courses -->
    <div class="courses" id="courses">
        <div class="column is-8">
            <h5>Courses</h5>
            <div class="columns">
                <div class="column">
                    <div class="course_duration">
                        <h4>BE 1<sup>st</sup> year</br>36 weeks</h4>
                        <div class="course_detail">
                            <h5>Semester I</h5>
                            <ul>
                                @foreach($dep->courses as $index) @if($index->course_type == 'first' && $index->course_year == 'first')
                                    <li>{{$index->course_number.' '.$index->title}}</li>
                                @endif @endforeach
                            </ul>
                            <h5>Semester II</h5>
                            <ul>
                                @foreach($dep->courses as $index) @if($index->course_type == 'second' && $index->course_year == 'first')
                                    <li>{{$index->course_number.' '.$index->title}}</li>
                                @endif @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="course_duration">
                        <h4>BE 2<sup>nd</sup> year</br>36 weeks</h4>
                        <div class="course_detail">
                            <h5>Semester I</h5>
                            <ul>
                                @foreach($dep->courses as $index) @if($index->course_type == 'first' && $index->course_year == 'second')
                                    <li>{{$index->course_number.' '.$index->title}}</li>
                                @endif @endforeach
                            </ul>
                            <h5>Semester II</h5>
                            <ul>
                                @foreach($dep->courses as $index) @if($index->course_type == 'second' && $index->course_year == 'second')
                                    <li>{{$index->course_number.' '.$index->title}}</li>
                                @endif @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="course_duration">
                        <h4>BE 3<sup>rd</sup> year</br>36 weeks</h4>
                        <div class="course_detail">
                            <h5>Semester I</h5>
                            <ul>
                                @foreach($dep->courses as $index) @if($index->course_type == 'first' && $index->course_year == 'third')
                                    <li>{{$index->course_number.' '.$index->title}}</li>
                                @endif @endforeach
                            </ul>
                            <h5>Semester II</h5>
                            <ul>
                                @foreach($dep->courses as $index) @if($index->course_type == 'second' && $index->course_year == 'third')
                                    <li>{{$index->course_number.' '.$index->title}}</li>
                                @endif @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="columns">
                <div class="column">
                    <div class="course_duration">
                        <h4>BE 4<sup>th</sup> year</br>36 weeks</h4>
                        <div class="course_detail">
                            <h5>Semester I</h5>
                            <ul>
                                @foreach($dep->courses as $index) @if($index->course_type == 'first' && $index->course_year == 'fourth')
                                    <li>{{$index->course_number.' '.$index->title}}</li>
                                @endif @endforeach
                            </ul>
                            <h5>Semester II</h5>
                            <ul>
                                @foreach($dep->courses as $index) @if($index->course_type == 'second' && $index->course_year == 'fourth')
                                    <li>{{$index->course_number.' '.$index->title}}</li>
                                @endif @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="course_duration">
                        <h4>BE 5<sup>th</sup> year</br>36 weeks</h4>
                        <div class="course_detail">
                            <h5>Semester I</h5>
                            <ul>
                                @foreach($dep->courses as $index) @if($index->course_type == 'first' && $index->course_year == 'fifth')
                                    <li>{{$index->course_number.' '.$index->title}}</li>
                                @endif @endforeach
                            </ul>
                            <h5>Semester II</h5>
                            <ul>
                                @foreach($dep->courses as $index) @if($index->course_type == 'second' && $index->course_year == 'fifth')
                                    <li>{{$index->course_number.' '.$index->title}}</li>
                                @endif @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="course_duration">
                        <h4>BE final year</br>36 weeks</h4>
                        <div class="course_detail">
                            <h5>Semester I</h5>
                            <ul>
                                @foreach($dep->courses as $index) @if($index->course_type == 'first' && $index->course_year == 'final')
                                    <li>{{$index->course_number.' '.$index->title}}</li>
                                @endif @endforeach
                            </ul>
                            <h5>Semester II</h5>
                            <ul>
                                @foreach($dep->courses as $index) @if($index->course_type == 'second' && $index->course_year == 'final')
                                    <li>{{$index->course_number.' '.$index->title}}</li>
                                @endif @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End courses -->
    <!-- Staff -->
    <div class="staff column is-6" id="staff">
        @foreach($dep->staff as $index)
            <div class="column">
                @if(empty($index->img_dir))
                    <img src="{{ asset('staff_photos/default.png') }}" class="image is-128x128 thumbnail"> @else
                    <img src="{{ asset('staff_photos/'.$index->img_dir) }}"
                         class="image is-128x128 thumbnail"> @endif
                <div class="staff-info">
                    <h5>{{ $index->title }}</h5>
                    <h5>{{ $index->staff_name }}</h5>
                    <p class="secondary"> Current Research: {{ $index->current_research }}</p>
                    <p class="secondary">Research Area: {{ $index->research_area }}</p>
                    @if(strtolower($index->title) == 'head of department')
                        <span class="hod_badge">HOD</span> @endif
                </div>
            </div>
        @endforeach
    </div>
    <!-- End staff -->
    </div>
@endsection @section('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/baugette.css') }}">
    <style>
        .toggle-button img {
            -webkit-filter: invert(1);
            filter: invert(1);
        }

        #landing {
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            color: #eee;
            @if(!isset($dep->img_dir))
           background-image: url('/../civil.png') !important;
            @else
           background-image: url("{{ asset("uploads/".$dep->img_dir) }}");
        @endif











        }

        .layer {
            min-height: 720px;
        }

        #landing .title {
            color: #eee;
            font-size: 4.5vh;
        }

        #landing .detail_button {
            margin: 20px;
            position: unset !important;
            border: 2px solid #eee;
        }

        #landing > .detail_button:hover {
            color: #eee !important;
        }

        .nav-list li a:hover {
            background-color: #dedede;
            color: #424242 !important;
        }

        .header li > a {
            text-decoration: none;
            color: #eee;
        }

        .brief_history {
            text-align: center;
        }

        .mission_vision .columns {
            margin: 0 auto !important;
        }

        .mission_vision span {
            float: left;
            font-size: 90px;
            line-height: 70px;
        }

        .mission_vision span.float_right {
            float: right;
        }

        .mission_vision h4 {
            margin: 0;
        }

        .mission_vision div.align_right {
            background: #424242;
            color: #F5F5F5;
        }

        .mission_vision h4.align_right {
            margin: 0;
            direction: rtl;
            unicode-bidi: bidi-override;
        }

        .mission_vision p {
            margin-top: 0;
        }

        .mission_vision div.bg_black {
            background: #424242;
        }

        .mission_vision .is-2 {
            padding: 0 !important;
        }

        .mission_vision .content {
            padding: 20px !important;
        }

        .mission_vision .align_right {
            text-align: right;
        }

        /**********   Offered degrees  */
        .offered_degrees {
            padding: 0.2em 0 !important;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/../degree_bg.jpg');
            /*background-image: url('/../degree_bg.jpg') !important;*/
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .offered_degrees > .column {
            padding: 0 !important;
            margin: 0.3em;
        }

        .undergrad > div,
        .postgrad > div {
            /*border: 1px solid #757575;*/
            padding: 0.5em;
            color: #e0e0e0;
        }

        .undergrad,
        .postgrad {
            padding: 0.2em;
        }

        .undergrad ul,
        .postgrad ul {
            height: 450px;
            list-style: none;
            overflow-y: scroll;
        }

        /*Offered degrees*/

        /*** research Facilities **/

        .research_facilities,
        .offered_degrees,
        .courses {
            display: flex;
            justify-content: center;
        }

        .gallery > .columns > .column {
            padding: 3px;
        }

        p.overlay_text {
            position: absolute;
            bottom: 10px;
            left: 10px;
            color: white;
            width: 80%;
            margin: 0;
            font: bold Helvetica, Sans-Serif;
            letter-spacing: -1px;
            background: rgb(0, 0, 0);
            background: rgba(0, 0, 0, 0.6);
            padding: 8px;
        }

        {
        {
            -- research Facilities --
        }
        }

        {
        {
            -- courses --
        }
        }

        .courses {
            background: #eee;
            margin-top: 20px;
        }

        .courses > .is-8 .column {
            display: flex;
            height: 200px;
        }

        .course_duration {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            margin: 0 auto;
            height: 25vh;
            width: 25vh;
            border-radius: 50%;
            background: white;
            transition: linear 0.2s;
            overflow: visible;
        }

        .course_duration .course_detail {
            padding: 10px;
            padding-top: 0;
            display: none;
            width: 0;
            height: 0;
            font-size: 12px;
            overflow: hidden;
        }

        .course_duration:hover {
            color: white;
            z-index: 3;
            background: #333;
            border-radius: 3px;
            max-height: 80vh;
            width: auto;
        }

        .course_duration:hover .course_detail {
            height: auto;
            width: auto;
            display: block;
        }

        .course_detail ul {
            padding: 10px;
            margin-top: 0;
            list-style: none;
        }

        .course_detail h5 {
            margin: 0;
        }

        .course_duration h4 {
            font-weight: 100;
        }

        {
        {
            -- courses --
        }
        }


        /*staffs*/


        /*Staff info*/

        .staff .column img {
            display: block;
            margin: 0 5vw;
        }

        .staff-info {
            display: flex;
            flex-direction: column;
            flex-grow: 1;
            justify-content: center;
        }

        .staff-info h5 {
            margin: 0;
        }

        .staff-info p {
            margin: 0;
        }

        .staff .column {
            border-bottom: 1px solid #bdbdbd;
        }

        .staff .column {
            padding-left: 0;
            padding-right: 0;
            display: flex;
            flex-direction: row;
            justify-content: center;
        }

        .staff {
            display: block;
            /*width: 80vw;*/
            margin: 0 auto;
        }

        .hod_badge {
            border: 1px solid #424242;
            text-align: center;
            border-radius: 15px;
            line-height: 30px;
            height: 30px;
            width: 30px;
            font-size: 0.7em;
            background: #424242;
            color: #ededed;
        }


        /*staffs*/


        /*Secondary Navbar*/

        #secondary_navbar {
            background-color: #263238;
            overflow: hidden;
            /*opacity: 0;
            transition: opacity ease 2s;*/
            position: sticky;
            z-index: 100;
            top: 0;
            width: 100%;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
        }


        /*.sticky {
            position: sticky;
            z-index: 2;
            top: 0;
            width: 100%;
            opacity: 100 !important;
        }
        */

        #secondary_navbar a {
            /*float: left;*/
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 15px;
            text-decoration: none;
            font-size: 17px;
            flex-grow: 1;
        }

        #secondary_navbar a:hover {
            background-color: #78909C;
        }
    </style>
@endsection('style') @section("script")
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/baugette.js') }}"></script>
    <script>
        baguetteBox.run('.gallery', {});
    </script>
    <script type="text/javascript">
        // var navbar = document.getElementById("secondary_navbar");
        var navbar = $("#secondary_navbar");
        var sticky = $("#secondary_navbar").offset().top;
        $(window).scroll(function () {
            if (window.pageYOffset >= sticky) {
                // navbar.classList.add("sticky");
                navbar.fadeIn(500);
            } else {
                // navbar.classList.remove("sticky");
                navbar.fadeOut(500);
            }
        });
        // var sticky = navbar.offsetTop;
        // var sticky = document.getElementById("mission_vision").offsetTop;
    </script>
@endsection("script")