<!DOCTYPE html>
<html>
<head>
	<title>Mandalay Technological University</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/montserrat.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body>
	<main id="panel">
	<div id="landing">
		<div class="layer">
			<div class="header">
			<div id="header_logo"><img src="/mtu.png" ></div>
			<h3 class="title">Mandalay <br>Technological <br>University</h3>
			<ul class="is-hidden-mobile nav-list">
				<li><a href="/">About</a></li>
				<li><a href="/">Research</a></li>
				<li><a href="/">Activities</a></li>
				<li><a href="/">Acedamic Plan</a></li>
				<li><a href="/">Departments</a></li>
			</ul>
			<button class="toggle-button is-hidden-desktop is-hidden-tablet"><img id="button_image" src="/menu2.png"></button>
			</div>
			<div class="detail_button"><h5>Read More</h5></div>
		</div>
	</div>
	<div class="events column is-10">
		<h4>Headline Events</h4>
		<div class="event columns">
			<div class="column">
				<div class="image is-16by9">
		  			<img src="{{ asset('/mtucover.jpg') }}">
		  		</div>
			</div>
			<div class="column">
				<h3>The Title</h3>
				<p>One summer afternoon, a group of recent college graduates decided to visit their favorite professor at his home. The grads had been out of school for about a year and they were each making their foray into the quote-unquote “real world” and dealing with all of the frustrations and confusion…</p>
				<div id="readmore_headlinebutton">Read More</div>
			</div>
		</div>
	</div>
	<div class="edge_up">
	</div>
	<div class="staff_info">
		<div>
			<img src="{{ asset('/dept.png') }}">
			<p>10 Departments</p>
		</div>
		<div>
			<img src="{{ asset('/dept.png') }}">
			<p>6 Supporting <br>Departments</p>
		</div>
	</div>
	<div class="edge_down">
	</div>
	<div class="articles column is-8">
		<h4>Recent articles</h4>
		<div class="article columns">
			<div class="columns is-mobile img_date column is-4"> 
				<div class="image_div column is-4">
					<div class="image is-128x128">
		  					<img src="{{ asset('mtucover.jpg') }}">
					</div>
				</div>
				<div class="date_div column is-8">
					<div class="date_texts">
						<p>Date<br><b>15 September</b></p>
						<p>Publisher<br><b>Grey</b></p>
					</div>
				</div>
			</div>
			<div class="text_div column">
				<h3>The Title</h3>
				<p>One summer afternoon, a group of recent college graduates decided to visit their favorite professor at his home. The grads had been out of school for about a year and they were each making their foray into the quote-unquote “real world” and dealing with all of the frustrations and confusion…</p>
			</div>
		</div>
		<div class="article columns">
			<div class="columns is-mobile img_date column is-4"> 
				<div class="image_div column is-4">
					<div class="image is-128x128">
		  					<img src="{{ asset('mtucover.jpg') }}">
					</div>
				</div>
				<div class="date_div column is-8">
					<div class="date_texts">
						<p>Date<br><b>15 September</b></p>
						<p>Publisher<br><b>Grey</b></p>
					</div>
				</div>
			</div>
			<div class="text_div column">
				<h3>The Title</h3>
				<p>One summer afternoon, a group of recent college graduates decided to visit their favorite professor at his home. The grads had been out of school for about a year and they were each making their foray into the quote-unquote “real world” and dealing with all of the frustrations and confusion…</p>
			</div>
		</div>
		<div class="column" id="morearticles_button"><h5>See more articles</h5></div>
	</div>

	<div class="announcements_and_upcommingevents column is-6">
		<div class="announcementorevent columns is-mobile">
			<div class="announce_date"><p>4th<br>June</p></div>
			<div class="content"><p>The grads had been out of school for about a year and they were each making their foray into the quote-unquote “real world”</p></div>
		</div>
		<div class="announcementorevent columns is-mobile">
			<div class="announce_date"><p>4th<br>June</p></div>
			<div class="content"><p>The grads had been out of school for about a year and they were each making their foray into the quote-unquote “real world”The grads had been out of school for about a year and they were each making their foray into the quote-unquote “real world”</p></div>
		</div>
		<div class="announcementorevent columns is-mobile">
			<div class="announce_date"><p>4th<br>June</p></div>
			<div class="content"><p>The grads had been out of school for about a year and they were each making their foray into the quote-unquote “real world”The grads had been out of school for about a year and they were each making their foray into the quote-unquote “real world”</p></div>
		</div>
		<div class="announcementorevent columns is-mobile">
			<div class="announce_date"><p>4th<br>June</p></div>
			<div class="content"><p>The grads had been out of school for about a year and they were each making their foray into the quote-unquote “real world”</p></div>
		</div>
	</div>
	</main>
	<div class="footer">
		
	</div>
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
	<script type="text/javascript" src="{{ asset('js/slideout.min.js') }}"></script>
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
</body>
</html>