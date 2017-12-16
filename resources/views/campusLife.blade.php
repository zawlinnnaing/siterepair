@extends('layout') 
@section('content')
<div id="landing_campuslife">
    <div class="layer">
        @include('header')
        <div class="detail_button">
            <h5>Read More</h5>
        </div>
    </div>
</div>
@endsection

@section('style')
<style>
#landing {
}
.nav-list li a:hover {
    background-color: #dedede;
    color: #424242 !important;
}


.header li>a {
    text-decoration: none;
    color: #eee;
}
</style>
@endsection