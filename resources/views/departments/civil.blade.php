@extends('layout') @section('content')

<div id="landing">
	<div class="layer">
		@include('header')
		<h4>The Civil</h4>
		<div class="brief_history column is-8">
			<p>Civil Engineering Department offered M.E and Ph.D courses. The courses scheduled to be offered have been reviewed and
				revised by Board of Postgraduate Studies of the Engineering Departments. Each course carries a ‘credit’ rating relating
				to the work load for each semester. The candidates registered for Master Degree is required to obtain minimum (60) credit
				points from two semesters. Each semester takes (16) weeks. In case of Ph.D courses, the candidates are required to obtain
				minimum (18) credit points of core courses from one semester. Four skill English courses are compulsory for both courses.
				The courses are designed to provide the students with the necessary research training oriented program and special assignments.
				In addition to formal course work, students are also required to participate in group seminars and weekly departmental
				seminars.
			</p>
		</div>
		<div class="detail_button">
			<h5>Read More</h5>
		</div>
	</div>
</div>
</div>


<div class="mission_vision">
	<div class="columns">
		<div class="column is-2"></div>
		<div class="column content">
			<span>M</span>
			<h4>ission</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
				Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
				irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
				cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
		<div class="column is-2"></div>
	</div>
	<div class="columns">
		<div class="column is-2 bg_black"></div>
		<div class="column align_right content">
			<span class="float_right">V</span>
			<h4 class="align_right">ision</h4>
			<p class="align_right">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
				Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
				irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
				cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
		<div class="column is-2 bg_black"></div>
	</div>

</div>
<div class="offered_degrees columns">
	<div class="column is-2 is-hidden-mobile"></div>
	<div class="column is-4 undergrad">
		<div>
		<h5 style="text-align: center;">Undergraduate Offered Degrees</h5>
		<ul>
			<li>B.E. (Civil Engineering)</li>
			<li>B.E. (Computer Engineering & Information Technology)</li>
			<li>B.E. (Electrical Power Engineering)</li>
			<li>B.E. (Mechanical Engineering)</li>
			<li>B.E. (Mechatronic Engineering)</li>
			<li>B.E. (Chemical Engineering)</li>
			<li>B.E. (Mining Engineering)</li>
			<li>B.E. (Nuclear Technology)</li>
			<li>B.E. (Biotechnology)</li>
			<li>B.Arch. (Architecture)</li>
		</ul>
		</div>
	</div>
	<div class="column is-4 postgrad">
	<div>
		<h5 style="text-align: center;">Postgraduate Offered Degrees</h5>
		<ul>
			<li>M.E. (Civil-Structural Engineering)</li>
			<li>M.E. (Civil-Water Resources Engineering)</li>
			<li>M.E. (Civil-Geotechnical Engineering)</li>
			<li>M.E. (Civil-Transportation Engineering )</li>
			<li>M.E. (Civil-Construction Management)</li>
			<li>M.E. (Information Technology)</li>
			<li>M.E. (Mechanical Engineering)</li>
			<li>M.E. (Electronic Engineering)</li>
			<li>M.E. (Electrical Power Engineering)</li>
			<li>M.E. (Mechatronic Engineering)</li>
			<li>M.E. (Chemical Engineering)</li>
			<li>M.E. (Mining Engineering)</li>
			<li>M.E. (Nuclear Technology)</li>
			<li>M.S. (Food Biotechnology) </li>
			<li>M.Arch. (Architecture)</li>
			<li>M.A. (English for Specific Purposes)</li>
			<li>Ph.D. (Structural Engineering)</li>
			<li>Ph.D. (Water Resources Engineering)</li>
			<li>Ph.D. (Information Technology)</li>
			<li>Ph.D. (Electronic Engineering)</li>
			<li>Ph.D. (Electrical Power Engineering)</li>
			<li>Ph.D. (Mechanical Engineering)</li>
			<li>Ph.D. (Mechatronic Engineering)</li>
			<li>Ph.D. (Chemical Engineering)</li>
			<li>Ph.D. (Mining Engineering)</li>
			<li>Ph.D. (Nuclear Technology)</li>
			<li>Ph.D. (Architecture)</li>
			<li>Ph.D. (Industrial Biotechnology) </li>
			<li>Ph.D. (Environmental Biotechnology)</li>
			<li>Ph.D. (Plant & Agricultural Biotechnology) </li>
			<li>Ph.D. (Food Biotechnology) </li>
		</ul>
		</div>
	</div>
</div>
<div class="courses">
	<div class="column is-8">
		<h5>Research Facilities</h5>
	</div>	
</div>
@endsection('content') @section('style')
<style>
	#landing {
		display: block;
		color: #eee;
		background-image: url('/../civil.png') !important;
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
		min-height: 720px !important;
		display: flex;
		justify-content: space-between;
		flex-direction: column;
		align-items: center;
		background-color: rgba(100, 100, 100, 0.1);
		z-index: 3;
		width: 100%;
	}

	#landing .title {
		color: #eee;
	}

	#landing .detail_button {
		border: 2px solid #eee;
	}

	#landing>.detail_button:hover {
		color: #eee !important;
	}

	.nav-list li a:hover {
		background-color: #dedede;
		color: #424242 !important;
	}

	li>a {
		text-decoration: none;
		color: #eee;
	}





	.brief_history {
		text-align: center;
	}

	.mission_vision .columns {
		margin: 0 auto !important;
	}

	.mission_vision span {
		float: left;
		font-size: 90px;
		line-height: 70px;
	}

	.mission_vision span.float_right {
		float: right;
	}

	.mission_vision h4 {
		margin: 0;
	}

	.mission_vision div.align_right {
		background: #424242;
		color: #F5F5F5;
	}

	.mission_vision h4.align_right {
		margin: 0;
		direction: rtl;
		unicode-bidi: bidi-override;
	}

	.mission_vision p {
		margin-top: 0;
	}

	.mission_vision div.bg_black {
		background: #424242;
	}

	.mission_vision .is-2 {
		padding: 0 !important;
	}

	.mission_vision .content {
		padding: 20px !important;
	}

	.mission_vision .align_right {
		text-align: right;
	}

	{
		{
			-- offered_degrees --
		}
	}

	.offered_degrees{
		padding: 0.5em 0 !important;
		background-image: url('/../civil.png') !important;
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
	}
	.offered_degrees>.column {
		padding: 0 !important; 
		margin: 0.5em;
	}

	.undergrad>div,
	.postgrad>div {
		padding: 0.5em;
		background-color: #fff;
		box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
	}

	.undergrad ul,
	.postgrad ul {
		height: 450px;
		list-style: none;
		overflow-y: scroll;
	}


	{
		{
			-- offered_degrees --
		}
	}

	{{--  courses  --}}

	.courses{
		display: flex;
		justify-content: center;
	}

	{{--  courses  --}}
</style>
@endsection('style')