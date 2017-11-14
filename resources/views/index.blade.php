@extends('layout')
@section('content')
<!-- 	<main id="panel">
 -->	<div id="landing">
		<div class="layer">
			@include('header')
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
	@endsection
	@section('style')
	<style type="text/css">
		.nav-list li a {
			color: black !important;
		}
		.date_div{
			padding: 0;
		}
	</style>
	@endsection