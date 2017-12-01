@extends('layout') @section('content')
<div class="cover_img">
</div>
<div class="content columns">
    <div class="column is-2">
        <img src="{{ asset('civil.png') }}" class="image is-128x128 thumbnail">
        <img src="{{ asset('civil.png') }}" class="image is-128x128 thumbnail">
        <img src="{{ asset('civil.png') }}" class="image is-128x128 thumbnail">
        <img src="{{ asset('civil.png') }}" class="image is-128x128 thumbnail">
    </div>
    <div class="column is-8">
        <h3 class="heading">Title</h3>
        <p class="additional_info">Date: November 29 2017
            <br> Publisher: bla bla
        </p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis in mi a odio pellentesque accumsan. In sed ligula sodales, maximus lectus non, sagittis massa. Duis mollis nisi et massa dictum lobortis. Suspendisse tempus commodo nulla non imperdiet. Morbi malesuada consequat pellentesque. In mollis nisl sit amet ex sollicitudin elementum. Pellentesque eget tellus ut nulla mattis rhoncus. In consectetur odio in neque ullamcorper feugiat. Etiam rutrum placerat porttitor.
            <br> Donec eget arcu ex. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse non facilisis dui. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur non consequat augue. Duis eleifend luctus ex luctus ullamcorper. Ut a orci sapien. Sed sodales vehicula quam, ut finibus neque hendrerit luctus.
            <br> Suspendisse nibh diam, ornare a dui eget, porta fringilla nunc. Donec scelerisque erat mi, ac rhoncus nulla rhoncus sit amet. Duis semper dapibus lorem, eget pellentesque metus feugiat eu. Etiam lacus risus, imperdiet at pellentesque eu, dictum in mauris. Nam bibendum molestie mi, a condimentum metus dapibus sit amet. Nulla in feugiat felis. Vivamus tempor ipsum sit amet neque porttitor sagittis.
            <br> Nullam vitae eros quis sem venenatis viverra in ut magna. Vivamus posuere felis id enim porttitor, non malesuada mauris condimentum. Donec ipsum enim, dictum eget volutpat eu, tempus venenatis orci. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque sit amet porta lectus. Morbi tempus id velit nec tincidunt. Duis ullamcorper blandit leo nec dignissim.
            <br> Sed malesuada pretium posuere. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu magna eget leo interdum sagittis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc euismod interdum odio non tempus. Quisque id orci in nibh accumsan feugiat. Vivamus euismod efficitur sapien in bibendum. Donec viverra sit amet dui eget mollis. Nulla eu sapien efficitur, pellentesque nisi vitae, varius erat. Aenean efficitur orci ut lacus porta mattis. Donec luctus sodales eleifend. Nam mattis purus id leo pulvinar porttitor. Maecenas in urna quis enim maximus commodo ut id arcu. Donec id justo in velit maximus pellentesque id vitae ante. Cras maximus sed dolor ac cursus. Ut erat orci, pharetra id lobortis ut, efficitur id velit.
        </p>
    </div>
</div>
@endsection @section('style')
<style type="text/css">
.cover_img {
    background: url('{{ asset('civil.png') }}');
    background-repeat: no-repeat;
    /*background-position:*/
    height: 50vh;
    background-size: cover;
}

.content .is-2 img {
    /*height: 200px ;
			width: 200px;
*/
    display: block;
    margin: 1em auto;
}

.content .is-2 {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
}

.content .additional_info {
    margin: 0 1em;
    color: #616161;
    display: inline-block;
    padding: 1em;
    background-color: #424242;
    color: white;
}
</style>
@endsection