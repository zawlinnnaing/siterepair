@extends('layout') @section('content')
<div id="landing">
    @include('header')
    <div class="landing-info">
        <h2>Campus Life</h2>
    </div>
</div>
<section>
    <div class="campus">
        <div class="facility columns">
            <div class="column is-4">
                <img src="{{ asset('mtucover.jpg') }}" class="image">
            </div>
            <div class="column">
                <h3>Our Library</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pharetra nec tortor et laoreet. Quisque pretium metus vitae vehicula posuere. Fusce lectus augue, laoreet sit amet nisi a, molestie egestas leo. Ut tortor metus, scelerisque auctor luctus at, vulputate ut ligula. Morbi mauris est, venenatis id eros maximus, finibus sodales orci. Vestibulum interdum tempor odio at tempor. Donec eget auctor lectus, at pharetra magna. Donec molestie mattis vestibulum. Morbi congue finibus porttitor. Praesent nec dui eget magna lacinia pretium. Proin pharetra est turpis, sit amet convallis purus ultricies sed.</p>
            </div>
        </div>
        <div class="facility columns">
            <div class="column">
                <h3>Facility</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pharetra nec tortor et laoreet. Quisque pretium metus vitae vehicula posuere. Fusce lectus augue, laoreet sit amet nisi a, molestie egestas leo. Ut tortor metus, scelerisque auctor luctus at, vulputate ut ligula. Morbi mauris est, venenatis id eros maximus, finibus sodales orci. Vestibulum interdum tempor odio at tempor. Donec eget auctor lectus, at pharetra magna. Donec molestie mattis vestibulum. Morbi congue finibus porttitor. Praesent nec dui eget magna lacinia pretium. Proin pharetra est turpis, sit amet convallis purus ultricies sed.</p>
            </div>
            <div class="column is-4">
                <img src="{{ asset('mtucover.jpg') }}" class="image">
            </div>
        </div>
    </div>
    <div class="clubs">
        <div class="column is-10">
            <h4 class="heading">Our clubs</h4>
            <div class="club">
                <div class="logo">
                    <img src="{{ asset('MTU.png') }}" class="image">
                </div>
                <div class="content">
                    <h3>Club title</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sodales ligula eu risus faucibus pharetra. Proin maximus ante id neque tincidunt, et lacinia est commodo. Donec egestas nisl lacus, eu pharetra urna cursus eget. Integer eu felis magna. Nulla lobortis augue sem, sed ultricies leo auctor ut. Sed non turpis felis. Vestibulum eu massa non augue tincidunt volutpat. Pellentesque sed elit ante. Phasellus ac congue eros, sit amet posuere elit. Proin gravida vehicula suscipit. Ut sed neque odio. Aenean at neque vitae massa vestibulum dignissim vitae quis leo. Vestibulum iaculis eget enim eu interdum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec vestibulum elementum velit at molestie. Aenean a quam tincidunt, ultricies turpis quis, sodales purus.</p>
                </div>
            </div>
            <div class="club">
                <div class="logo">
                    <img src="{{ asset('MTU.png') }}" class="image">
                </div>
                <div class="content">
                    <h3>Club title</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sodales ligula eu risus faucibus pharetra. Proin maximus ante id neque tincidunt, et lacinia est commodo. Donec egestas nisl lacus, eu pharetra urna cursus eget. Integer eu felis magna. Nulla lobortis augue sem, sed ultricies leo auctor ut. Sed non turpis felis. Vestibulum eu massa non augue tincidunt volutpat. Pellentesque sed elit ante. Phasellus ac congue eros, sit amet posuere elit. Proin gravida vehicula suscipit. Ut sed neque odio. Aenean at neque vitae massa vestibulum dignissim vitae quis leo. Vestibulum iaculis eget enim eu interdum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec vestibulum elementum velit at molestie. Aenean a quam tincidunt, ultricies turpis quis, sodales purus.</p>
                </div>
            </div>
            <div class="club">
                <div class="logo">
                    <img src="{{ asset('MTU.png') }}" class="image">
                </div>
                <div class="content">
                    <h3>Club title</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sodales ligula eu risus faucibus pharetra. Proin maximus ante id neque tincidunt, et lacinia est commodo. Donec egestas nisl lacus, eu pharetra urna cursus eget. Integer eu felis magna. Nulla lobortis augue sem, sed ultricies leo auctor ut. Sed non turpis felis. Vestibulum eu massa non augue tincidunt volutpat. Pellentesque sed elit ante. Phasellus ac congue eros, sit amet posuere elit. Proin gravida vehicula suscipit. Ut sed neque odio. Aenean at neque vitae massa vestibulum dignissim vitae quis leo. Vestibulum iaculis eget enim eu interdum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec vestibulum elementum velit at molestie. Aenean a quam tincidunt, ultricies turpis quis, sodales purus.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="offices">
        <h4 style="margin-left: 1.5em;">Our offices</h4>
        <div class="columns">
            <div class="column card">
                <div class="icon">
                    <i class="fa fa-briefcase" aria-hidden="true"></i>
                </div>
                <div class="info">
                    <h5>Office name</h5>
                    <p>Phone number: 09-000000000</p>
                    <p>Fax-number: 09-438534535</p>
                </div>
            </div>
            <div class="column card">
                <div class="icon">
                    <i class="fa fa-briefcase" aria-hidden="true"></i>
                </div>
                <div class="info">
                    <h5>Office name</h5>
                    <p>Phone number: 09-000000000</p>
                    <p>Fax-number: 09-438534535</p>
                </div>
            </div>
            <div class="column card">
                <div class="icon">
                    <i class="fa fa-briefcase" aria-hidden="true"></i>
                </div>
                <div class="info">
                    <h5>Office name</h5>
                    <p>Phone number: 09-000000000</p>
                    <p>Fax-number: 09-438534535</p>
                </div>
            </div>
            <div class="column card">
                <div class="icon">
                    <i class="fa fa-briefcase" aria-hidden="true"></i>
                </div>
                <div class="info">
                    <h5>Office name</h5>
                    <p>Phone number: 09-000000000</p>
                    <p>Fax-number: 09-438534535</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection @section('style')
<style>
#landing {
    background: linear-gradient(rgba(150, 150, 150, .5), rgba(150, 150, 150, .5)),
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

    position: absolute;
    bottom: 0;
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

.campus {
    margin-top: 2em;
    border: 1px solid #757575;
}
.facility .column img {
    display: block;
    width: 100%;
    height: auto;
    margin: auto;
}

.facility .column h3 {
    margin-left: 0;
}

.facility {
    margin: 3em 0 !important;
}

.clubs .is-10 {
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.clubs .heading {
    margin-left: 0 !important;
    margin: 2em 0;
}

.club .logo {
    width: 100px;
    height: 100px;
    position: absolute;
    margin: 0 auto;
    left: 0;
    right: 0;
    transition: ease all 0.5s;
}

.club .logo img {
    width: 100px;
    height: auto;
    display: block;
    margin: auto;
}

.club .content {
    max-height: 0;
    opacity: 0;
    background-color: #424242;
    color: #fafafa;
    overflow: hidden;
    transition: ease all 0.5s;
    padding: 2em;
}

.club {
    height: 100px;
    margin: 4em 0;
    position: relative;
}

.club:hover {
    height: auto;
}

.club:hover .logo {
    opacity: 0;
}

.club:hover .content {
    max-height: 800px;
    opacity: 100;
}

.offices .column .icon {
    font-size: 5em;
    text-align: center;
    border-bottom: 1px solid #757575;
}

.offices .columns .column {
    margin: 1em;
}

.offices {
    margin: 4em 0;
}
.offices .column .info{
    padding: 4em 1em;
}
</style>
@endsection