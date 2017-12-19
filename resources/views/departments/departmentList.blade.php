@extends('layout') @section('content')
<div id="landing">
    @include('header')
    <div class="column is-8">
	    <div class="columns">
	        <div class="column engineering_dept is-6">
	        	<ul>
					<li><a href="{{ route('department','archi') }}">Architectural Engineering</a></li>
					<li><a href="{{ route('department','biotech') }}">BioTech</a></li>
					<li><a href="{{ route('department','chemical') }}">Chemical Engineering</a></li>
					<li><a href="{{ route('department','civil') }}">Civil Engineering</a></li>
					<li><a href="{{ route('department','ceit') }}">Computer Engineering & Information Technological</a></li>
					<li><a href="{{ route('department','ep') }}">Electrical Power Engineering</a></li>
					<li><a href="{{ route('department','ec') }}">Electronic Engineering</a></li>
					<li><a href="{{ route('department','mechancial') }}">Mechanical Engineering</a></li>
					<li><a href="{{ route('department','mechatronic') }}">Mechatronic Engineering</a></li>

	        	</ul>
	        </div>
	        <div class="column supporting_dept is-6">
	        	<ul>
	        		<li><a href="/departments/">Engineering Chemistry</a></li>
	        		<li><a href="/departments/">Engineering English</a></li>
	        		<li><a href="/departments/">Engineering Maths</a></li>
	        		<li><a href="/departments/">Engineering Physics</a></li>
	        		<li><a href="/departments/">International Relation</a></li>
	        		<li><a href="/departments/">Myanmar</a></li>
	        		<li><a href="/departments/">Workshop</a></li>
	        	</ul>
	        </div>
	    </div>
    </div>
</div>
@endsection @section('style')
<style type="text/css">
 #landing {
    width: 100%;
    display: block;
    background: linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.4)),url('/../mtu_sketch.jpg');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    min-height: 740px;
}




.nav-list {
    display: block;
    float: right;
    margin: 55px 0;
}

ul.nav-list>li {
    display: block;
    margin: 0 auto;
    list-style: none;
    float: right;
    cursor: pointer;
}

.nav-list>li a {
    padding: 1em;
    color: black;
}


.is-8{
	padding: 0 !important;
	margin: auto;
}
.is-8>.columns{
	margin: 0 1em !important; 
	background: #232323;
	opacity: 0.6;
}
.engineering_dept,.supporting_dept {
	margin: 0;
	padding: 0;
	text-align: center;
}
.engineering_dept>ul>li,.supporting_dept>ul>li{
	padding: 0.8em;
	font-size: 1em;
	cursor: pointer;
}
.engineering_dept>ul,.supporting_dept>ul{
	margin: 0;
	padding: 0;
}
.engineering_dept>ul>li>a,.supporting_dept>ul>li>a{
	color: #ededed;
}


.column ul li a {
	color: #ededed;
}

</style>
@endsection