<!DOCTYPE html>

<!------------------------------- Admin Layout ------------------------>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin Panel</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('mtu_small.ico') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/montserrat.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!------------------------------- Quill CSS ------------------------>
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    <style type="text/css">
        .header {
            background-color: #42A5F5;
            color: white;
            padding: 0 !important;
        }

        .header ul li a:hover {
            background-color: white;
            color: black !important;
        }

        .header ul {
            margin: 0;
        }
    </style>
    @yield('style')
</head>

<body>
<div id="app">

    {{--Navbar--}}
    <div class="header">
        <div>
            <h3>Admin Panel</h3>
        </div>
        <ul class="is-hidden-mobile nav-list">
            {{--<li><a href="{{ route('admin.change_password') }}">Change Password</a></li>--}}
            @if(Auth::user())
                <li><a href="{{ route('logout') }}">Logout({{ ucwords(Auth::user()->name) }})</a></li>
            @endif
            <li><a href="{{ route('posts.index') }}">Posts</a></li>
            <li><a href="{{ route('admin.createDep') }}">Department</a></li>
            <li><a href="{{ route('users.index') }}">Users</a></li>
        </ul>
        <div class="toggle-button is-hidden-desktop is-hidden-tablet"><img id="button_image" src="/menu2.png"></div>
    </div>
</div>
@yield('content')
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script
        src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

<script src="{{ asset('js/admin.js') }}"></script>

<!------------------------------- Quill script ------------------------>

@yield('script')
</body>

</html>