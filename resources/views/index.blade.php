@extends('layout')
@section('content')
    <div id="landing">
        @include('header')
        {{--<div class="detail_button">--}}
        {{--<h5>Read More</h5>--}}
        {{--</div>--}}
    </div>
    <div class="events column is-10">
        <h4>Headline Events</h4>
        <div class="event columns">
            <div class="column">
                <div class="image is-16by9">
                    <img src="{{ asset('/uploads/admission_form.jpg') }}">
                </div>
            </div>
            <div class="column">
                <h3>2018-2019 Academic Year MTU Entrance form</h3>
                <p class="mmfont">၁။ ၂၀၁၈-၂၀၁၉ ပညာသင်နှစ်အတွက် မန္တလေးနည်းပညာတက္ကသိုလ် ၏ အင်ဂျင်နီယာ နှင့် ဗိသုကာ
                    သင်တန်း ၊ ဇီဝနည်းပညာသင်တန်းများကို အောက်ဖော်ပြပါ အထူးပြုဘာသာရပ်များအလိုက် ဖွင့်လှစ်သွားမည်
                    ဖြစ်ပါသည်။...
                    <a href="/MTU( Form) (1).docx">Download application form here</a></p>
                <div id="readmore_headlinebutton">
                    <h5><a href="/detail/1">Read More</a></h5>
                </div>
            </div>
        </div>
    </div>
    <div class="edge_up">
    </div>
    <div class="staff_info">
        <div class="image is-64x64">
            <img src="{{ asset('/dept.png') }}">
            <h4> 11 main Departments</h4>
        </div>
        <div class="image is-64x64">
            <img src="{{ asset('/dept.png') }}">
            <h4> 6 supporting Departments </h4>
        </div>
    </div>
    <div class="edge_down">
    </div>
    <div class="articles column is-8">
        <h4>Recent articles</h4>
        @foreach($posts as $post)
            <div class="article columns">
                <div class="columns is-mobile img_date column is-4">
                    <div class="image_div column is-6">
                        <div class="image is-128x128">
                            <img src="{{ asset('uploads/no-image-available.png') }}">
                        </div>
                    </div>
                    <div class="date_div column">
                        <div class="date_texts">
                            <p>Date
                                <br>
                                <b>{{ date('d-M-Y', strtotime($post->created_at))
 }}</b>
                            </p>
                            <p>Publisher
                                <br>
                                <b>{{ $post->publisher }}</b>
                            </p>
                            <p>Category
                                <br>
                                <b>{{ $post->category->title }}</b>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="text_div column">
                    <a href="{{ route('post_detail',$post->id) }}">
                        <h3 class='mmfont'>{{$post->title}}</h3>
                        <p class='mmfont'>{{ strip_tags($post->content) }}</p>
                    </a>
                </div>
            </div>
        @endforeach
        <div class="column" id="morearticles_button">
            <a href="{{ route('articles') }}">See more articles</a>
        </div>
    </div>
    <div class="announcements_and_upcommingevents column is-6">
        @foreach($announcements as $announcement)
            <div class="announcementorevent columns is-mobile">
                <div class="announce_date">
                    <p>{{ date('d',strtotime($announcement->created_at)) }}
                        <br>{{ date('M',strtotime($announcement->created_at)) }}</p>
                </div>
                <div class="content">
                    <p>{!! $announcement->content!!}</p>
                </div>
            </div>
        @endforeach
    </div>

@endsection
@section('style')
    <style>
        .nav-list > li a {
            padding: 1em 1em;
            color: black;
        }

        div.article {
            margin: 2em 0 !important;
        }

        /*article style*/

        .image_div {
            display: flex;
            justify-content: space-around;
            margin: auto 0 !important;
            padding: 0 !important;
        }

        .article img {
            border-radius: 50%;
            height: 100% !important;
            width: 100% !important;
        }

        .articles,
        .events {
            margin: 0 auto;
            padding: 30px 0 !important;
        }

        .article {
            padding: 20px;
            height: 200px;
            overflow: hidden;
            border-bottom: 1px solid #ddd;
        }

        .date_div {
            display: flex !important;
            justify-content: space-around;
        }

        .date_div p {
            position: relative;
            margin: 0;
        }

        .date_texts {
            display: block;
            margin: auto 0;
        }

        .img_date {
            margin: 0 !important;
        }

        #morearticles_button {
            cursor: pointer;
            text-align: center;
        }

        #morearticles_button a {
            color: #333;
            text-decoration: none;
        }

        #morearticles_button > a, #readmore_headlinebutton > h5 {
            border: 2px solid black;
            display: inline-block;
            margin: 0 auto;
            padding: 10px 20px;
        }

        #morearticles_button > a:hover {
            background-color: #333;
            color: white;
        }

        /*article style*/
        /*events style*/

        .event {
            margin: 20px !important;
        }

        #readmore_headlinebutton > a:hover {
            background-color: #333;
            color: white;
        }

        /*events style*/
        /*announcement&upcommingevents*/

        .announcements_and_upcommingevents {
            margin: 0 auto 30px;
            /*overflow-y: hidden;*/
        }

        .announcementorevent {
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
            margin: 5px !important;
            background: #efefef;
        }

        .announcementorevent .announce_date {
            text-align: center;
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
            color: white;
            background: black;
            float: left;
            clear: none;
            padding: 10px;
        }

        .announcementorevent .content {
            padding: 10px;
        }

        .announcementorevent p {
            margin: 0 !important;
            display: block;
        }

        /*announcement&upcommingevents*/
        /*edges and staff*/

        /*.edge_up {
            height: 10px;
            background: url(/../edgeup.png) repeat-x scroll 0% 100%/ contain;
        }

        .edge_down {
            height: 10px;
            background: url(/../edgedown.png) repeat-x scroll 0% 100%/ contain;
        }*/

        .staff_info {
            height: 200px;
            background-color: #222;
            display: flex;
            flex-direction: row;
            justify-content: space-around;
        }

        .staff_info > div {
            color: white;
            margin: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /*edges and staff*/
        @supports (-webkit-line-clamp: 3 ) {
            .text_div p {
                display: -webkit-box;
                -webkit-line-clamp: 3;
                -webkit-box-orient: vertical;
                overflow: hidden;
            }
        }

        .text_div p {
            max-height: 250px;
            overflow: hidden;
        }

        .text_div a {
            text-decoration: none;
            color: black;
        }

        .text_div a:hover {
            color: #BDBDBD;
        }

        .staff_info h4 {
            text-align: center;
        }

        #readmore_headlinebutton h5 a {
            text-decoration: none;
            color: #333;
        }

        #readmore_headlinebutton:hover {

        }
    </style>

@endsection