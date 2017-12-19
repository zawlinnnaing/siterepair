@extends('layout')
@section('content')
    <div id="landing">
        @include('header')
        <div class="landing-info">
            <h2>Campus Life</h2>
        </div>
    </div>
    <section>
        <div class="campus">
            <div class="library columns">
                <div class="column is-4">
                    <img src="{{ asset('mtucover.jpg') }}" class="image">
                </div>
                <div class="column">
                    <h3>Our Library</h3>
                    <br>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pharetra nec tortor et laoreet. Quisque pretium metus vitae vehicula posuere. Fusce lectus augue, laoreet sit amet nisi a, molestie egestas leo. Ut tortor metus, scelerisque auctor luctus at, vulputate ut ligula. Morbi mauris est, venenatis id eros maximus, finibus sodales orci. Vestibulum interdum tempor odio at tempor. Donec eget auctor lectus, at pharetra magna. Donec molestie mattis vestibulum. Morbi congue finibus porttitor. Praesent nec dui eget magna lacinia pretium. Proin pharetra est turpis, sit amet convallis purus ultricies sed.</p>
                </div>

            </div>
        </div>
        <div class=""></div>
    </section>
@endsection

@section('style')
    <style>
        #landing {
            background: linear-gradient(rgba(255, 255, 255, .5), rgba(255, 255, 255, .5)), url("{{ asset('campus-life.jpg') }}") center;
            -webkit-background-size: cover;
            background-size: cover;
            flex-direction: column !important;
            align-items: center;
            justify-content: flex-start;
            color: #eee;
            position: relative;
        }
        #landing .landing-info{
            position: absolute;
            bottom: 0;
            width: 100%;
            background: linear-gradient(rgba(0,0,0,.5),rgba(0,0,0,.5));
        }
        #landing .landing-info h2{
            text-align: center;
        }
        .nav-list > li a {
            padding: 1em 1em;
            color: black;
        }

        .nav-list li a:hover {
            background-color: #ededed;
            color: #424242 !important;
        }

        .library .column img{
            display: block;
            width: 100%;
            height: auto;
            margin: auto;
        }
        .library .column h3{
            margin-left: 0; 
        }


    </style>
@endsection