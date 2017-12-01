<!DOCTYPE html>
<html>

<head>
    <title>Mandalay Technological University</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/montserrat.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"> @yield('style')
</head>

<body>
    <main id='panel'>
        @yield('content')
    </main>
    <!-- footer  -->
    <div class="footer">
    </div>
    <!-- Nav bar for mobile -->
    <nav id="menu" class="menu">
        <section class="menu-section">
            <h3 class="menu-section-title">Menu</h3>
            <ul class="menu-section-list">
                <li><a href="/">About</a></li>
                <li><a href="/">Research</a></li>
                <li><a href="/">Activities</a></li>
                <li><a href="/">Acedamic Plan</a></li>
                <li><a href="/">Departments</a></li>
            </ul>
        </section>
    </nav>
    <script type="text/javascript" src="{{ asset('js/slideout.js') }}"></script>
    <script>
    var slideout = new Slideout({
        'panel': document.getElementById('panel'),
        'menu': document.getElementById('menu'),
        'padding': 256,
        'tolerance': 70,
        'side': 'right'
    });

    // Toggle button
    document.querySelector('.toggle-button').addEventListener('click', function() {
        slideout.toggle();
    });
    </script>
    @yield("script")
</body>