@extends('layout') @section('content')
<div id="landing">
    @include('header')
    <div class="landing-info">
        <h2>Around The Campus</h2>
    </div>
</div>
<section>
    <div class="campus column is-10">
        <div class="library columns">
            <div class="column is-4">
                <img src="{{ asset('mtucover.jpg') }}">
            </div>
            <div class="column">
                <h3>Our Library</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pharetra nec tortor et laoreet. Quisque pretium metus vitae vehicula posuere. Fusce lectus augue, laoreet sit amet nisi a, molestie egestas leo. Ut tortor metus, scelerisque auctor luctus at, vulputate ut ligula. Morbi mauris est, venenatis id eros maximus, finibus sodales orci. Vestibulum interdum tempor odio at tempor. Donec eget auctor lectus, at pharetra magna. Donec molestie mattis vestibulum. Morbi congue finibus porttitor. Praesent nec dui eget magna lacinia pretium. Proin pharetra est turpis, sit amet convallis purus ultricies sed.</p>
            </div>
        </div>
        <div class="library columns">
            <div class="column">
                <h3>Our Library</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pharetra nec tortor et laoreet. Quisque pretium metus vitae vehicula posuere. Fusce lectus augue, laoreet sit amet nisi a, molestie egestas leo. Ut tortor metus, scelerisque auctor luctus at, vulputate ut ligula. Morbi mauris est, venenatis id eros maximus, finibus sodales orci. Vestibulum interdum tempor odio at tempor. Donec eget auctor lectus, at pharetra magna. Donec molestie mattis vestibulum. Morbi congue finibus porttitor. Praesent nec dui eget magna lacinia pretium. Proin pharetra est turpis, sit amet convallis purus ultricies sed.</p>
            </div>
            <div class="column is-4">
                <img src="{{ asset('mtucover.jpg') }}" class="image">
            </div>
        </div>
        <div class="clubs column is-8">
            <div class="columns">
                <div class="column is-5">
                <div class="club columns is-mobile">
                    <div class="club_logo column">
                        <div>
                            <p>hello</p>
                        </div>
                    </div>
                    <div class="club_title column">
                        <h5>Sports Club</h5>
                    </div>
                </div>
                </div>
                <div class="column is-2"></div>
                <div class="column is-5">
                <div class="club columns is-mobile">
                    <div class="club_title column">
                        <h5>Sports Club</h5>
                    </div>
                    <div class="club_logo column">
                        <div>
                            <p>hello</p>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class=""></div>
</section>
@endsection @section('style')
<style>
.campus {
    margin: auto;
}

#landing {
    background: linear-gradient(rgba(255, 255, 255, .5), rgba(255, 255, 255, .5)),
    url("{{ asset('campus-life.jpg') }}") center;
    -webkit-background-size: cover;
    background-size: cover;
    flex-direction: column !important;
    align-items: center;
    justify-content: flex-start;
    color: #eee;
    position: relative;
}

#landing .landing-info {
    margin: auto;
    width: 100%;
    background: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5));
}

#landing .landing-info h2 {
    text-align: center;
}

.nav-list>li a {
    padding: 1em 1em;
    color: black;
}

.nav-list li a:hover {
    background-color: #ededed;
    color: #424242 !important;
}

.library .column img {
    display: block;
    width: 100%;
    height: auto;
    margin: auto;
}

.library .column h3 {
    margin-left: 0;
}

.clubs {
    margin: auto;
}
.clubs>.columns>div{
    padding: 0;
    display: flex;
}
.club_logo>div {
    display: flex;
    height: 130px;
    width: 130px;
    margin: auto;
    border-radius: 75px;
    justify-content: center;
    align-items: center;
    background: black;
    overflow: visible;
}

.club_title {
    margin: auto;
    display: flex;
    justify-content: center;
}

.club_logo>div:hover {
    height: 500px;
    width: 300px;
    z-index: 5;
}
.club_logo>div:hover .club_title{
    display: none;
}
</style>
@endsection