@extends('layout') @section('content')
    <div class="cover_img">
        @include('header')
        <div class="text">
            <h4>{{ $post->title }}</h4>
            <p class="additional_info">Date: {{ date('Y-M-d', strtotime($post->created_at)) }}
                <br> Publisher: {{ $post->publisher }}
                <br> Category: {{$post->category->title }}
            </p>
        </div>
    </div>
    <div class="content column">
        <div class="columns">
            <div class="column"></div>
            <div class="column is-10 post-content">
                {!! $post->content !!}
            </div>
            <div class="column"></div>
            {{--<div class="column is-3">--}}
            {{--<div class="gallery">--}}
            {{--<!-- <div class="columns is-mobile"> -->--}}
            {{--@foreach($post->photos as $index)--}}
            {{--<div class="column">--}}
            {{--<a href="{{ asset('uploads/'.$index->img_dir) }}">--}}
            {{--<div class="image is-3by2">--}}
            {{--<img src="{{ asset('uploads/'.$index->img_dir) }}" style="display: block;">--}}
            {{--</div>--}}
            {{--</a>--}}
            {{--</div>--}}
            {{--@endforeach--}}
            {{--</div>--}}
            {{--<p class="additional_info column">Date: {{ $post->created_at }}--}}
            {{--<br> Publisher: {{$post->publisher}}--}}
            {{--</p>--}}
            {{--<!-- </div> -->--}}
            {{--</div>--}}
        </div>
    </div>
@endsection @section('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/baugette.css') }}">
    <style type="text/css">
        .toggle-button img {
            -webkit-filter: invert(1);
            filter: invert(1);
        }

        .title {
            color: #eee;
            font-size: 4.5vh;
        }

        .cover_img {
            {{--background: url("{{ asset('uploads/no-image-available.jpg') }}") linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)) no-repeat center;--}}
                      height: 50vh;
            background-color: black;
            background-size: cover;
            position: relative;
        }

        .content .is-2 .gallery {
            /*display: flex;*/
            /*flex-direction: row;*/
            /*flex-wrap: wrap;*/
        }

        .content .additional_info {
            margin: 0 1em;
            color: white;
            display: block;
            padding: 1em;
            background-color: #424242;
        }

        /*img.image:hover {
            width: 256px;
            height: 256px;
        }
        */

        .content .column article {
            transition: all ease 0.3s;
        }

        .image:hover article {
            opacity: 0.1;
        }

        .cover_img .text {
            color: white;
            padding: 0 2em;
            position: absolute;
            bottom: 0;
            left: 0;
        }

        .post-content {
            overflow: hidden;
        }

        .img {
            height: 100%;
            width: 100%;
            background: url('{{ asset('civil.png') }}');
            background-position: center center;
            background-size: contain;
            background-repeat: no-repeat;

            transition: all ease 0.3s;
        }

        .parent {
            height: 128px;
            width: 128px;
            display: block;
            margin: 0em auto;
            position: relative;
        }

        .img:hover {
            height: 256px;
            width: 256px;
            position: absolute;
            z-index: 4;
        }
    </style>
@endsection @section('script')
    <script type="text/javascript" src="{{ asset('js/baugette.js') }}"></script>
    <script type="text/javascript">
        baguetteBox.run('.gallery', {});
    </script>
@endsection