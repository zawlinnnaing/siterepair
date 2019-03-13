@extends('layout') @section('content')
    <div id="landing">
        @include('header')
    </div>
    <div class="articles column is-10">
        <div class="header">
            <h2>Articles</h2>
            <form method="POST" action="{{ route('searchArticles') }}">
                <input type="text" name="search">
                <input type="submit" name="submit" value="search">
            </form>
        </div>
        @foreach($posts as $post)
            <div class="item" style="background: url('{{ asset('civil.png') }}'); height: 250px; overflow: hidden">
                <a href="{{ route('post_detail',$post->id) }}">
                    <div class="columns">
                        <div class="column content">
                            <h4 style="font-weight: bold;" class="mmfont">{{ $post->title }}</h4>
                            <div class="mmfont">{{ strip_tags($post->content) }}</div>
                        </div>
                        <div class="column is-2">
                            <p>Date: {{ date('Y-M-d',strtotime($post->created_at)) }}</p>
                            <p>Publisher: {{ $post->publisher }}</p>
                            <p>Category: {{ $post->category->title }}</p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    <!-- {{ $posts->links() }} -->
    <!-- <div class="header">
            <h2>Announcements
            </h2></div>
        {{--@foreach($announcements as $announcement)--}}
        {{--<div class="item" style="background: url('{{ asset('civil.png') }}');">--}}
        {{--<div class="columns">--}}
        {{--<div class="column">--}}
        {{--<p>{{ $announcement->content }}</p>--}}
        {{--</div>--}}
        {{--<div class="column is-2">--}}
        {{--<p>Date: {{ date('Y-M-d',strtotime($announcement->created_at)) }}</p>--}}
        {{--<p>Publisher: {{ $announcement->publisher }}</p>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--@endforeach--}}
        {{--{{ $announcements->links() }}--}}
            </div> -->
        @endsection @section('style')
            <style type="text/css">
                .articles {
                    display: block;
                    margin: 0 auto;
                }

                .nav-list > li a {
                    padding: 1em 1em;
                    color: black;
                }

                .header {
                    display: flex;
                    justify-content: space-between;
                    flex-wrap: wrap;
                }

                form {
                    margin-top: 2.5em;
                }

                input[type='submit'] {
                    background-color: #212121;
                    color: white;
                }

                .item {
                    background-size: cover !important;
                    background-position: center center !important;
                    background-repeat: no-repeat !important;
                    margin: 2em 0;
                }

                .item .column {
                    color: white;
                }

                .item .detail_button {
                    vertical-align: bottom;
                    padding: 1em;
                    background-color: white;
                    color: black;
                }

                .item .is-2 {
                    /*color: black;
                    background-color: white;
                    border: 1px solid #bdbdbd;*/
                    /*  display: inline;
                */
                }

                .content {
                    max-height: 200px;
                    overflow-y: -webkit-paged-y;
                }

                .content pre {
                    white-space: -moz-pre-wrap; /* Firefox */
                    white-space: -pre-wrap; /* ancient Opera */
                    white-space: -o-pre-wrap; /* newer Opera */
                    white-space: pre-wrap; /* Chrome; W3C standard */
                    word-wrap: break-word;
                }

                .item a {
                    text-decoration: none;
                    color: white;
                }

                ul.pagination {
                    display: flex;
                    justify-content: space-evenly;
                }

                ul.pagination li a {
                    padding: 1em 2em;
                    background-color: #616161;
                    color: #ededed;
                    transition: ease all 0.5s;
                }

                ul.pagination li a:hover {
                    background-color: #ededed;
                    color: #616161;
                }
            </style>
@endsection