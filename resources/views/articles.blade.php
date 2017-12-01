@extends('layout') @section('content')
<div id="landing">
    <div class="layer">
        @include('header')
        <div class="detail_button">
            <h5>Read More</h5>
        </div>
    </div>
</div>
<div class="articles column is-10">
    <div class="header">
        <h2>Articles</h2>
        <form>
            <input type="text" name="search">
            <input type="submit" name="submit" value="search">
        </form>
    </div>
    <div class="item" style="background: url('{{ asset('civil.png') }}');">
        <div class="columns">
            <div class="column">
                <h4 style="font-weight: bold;">Title</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in porttitor arcu. Sed tempor magna diam, id luctus metus scelerisque a. Interdum et malesuada fames ac ante ipsum primis in faucibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque luctus eu justo sit amet tempus. Nunc in lorem tellus. Nunc eu tempor lectus. Donec venenatis luctus ipsum, sit amet venenatis ligula semper ut. Integer efficitur, leo et dictum sagittis, orci massa vestibulum nisl, non euismod metus mi vitae quam.
                </p>
            </div>
            <div class="column is-2">
                <p>Date: 2017 November 19</p>
                <p>Publisher: Bla bla</p>
            </div>
        </div>
    </div>
    <div class="item" style="background: url('{{ asset('civil.png') }}');">
        <div class="columns">
            <div class="column">
                <h4 style="font-weight: bold;">Title</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in porttitor arcu. Sed tempor magna diam, id luctus metus scelerisque a. Interdum et malesuada fames ac ante ipsum primis in faucibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque luctus eu justo sit amet tempus. Nunc in lorem tellus. Nunc eu tempor lectus. Donec venenatis luctus ipsum, sit amet venenatis ligula semper ut. Integer efficitur, leo et dictum sagittis, orci massa vestibulum nisl, non euismod metus mi vitae quam.
                </p>
            </div>
            <div class="column is-2">
                <p>Date: 2017 November 19</p>
                <p>Publisher: Bla bla</p>
                <a class="detail_button">Read more</a>
            </div>
        </div>
    </div>
    <div class="item" style="background: url('{{ asset('civil.png') }}');">
        <div class="columns">
            <div class="column">
                <h4 style="font-weight: bold;">Title</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in porttitor arcu. Sed tempor magna diam, id luctus metus scelerisque a. Interdum et malesuada fames ac ante ipsum primis in faucibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque luctus eu justo sit amet tempus. Nunc in lorem tellus. Nunc eu tempor lectus. Donec venenatis luctus ipsum, sit amet venenatis ligula semper ut. Integer efficitur, leo et dictum sagittis, orci massa vestibulum nisl, non euismod metus mi vitae quam.
                </p>
            </div>
            <div class="column is-2">
                <p>Date: 2017 November 19</p>
                <p>Publisher: Bla bla</p>
            </div>
        </div>
    </div>
</div>
@endsection @section('style')
<style type="text/css">
.articles {
    display: block;
    margin: 0 auto;
}

.header {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}

form {
    margin-top: 2.5em;
}

input[type='submit'] {
    background-color: #212121;
    color: white;
}

.item {
    /*height: 500px;*/
    background-size: cover !important;
    background-position: center center !important;
    background-repeat: no-repeat !important;
    margin: 2em 0;
}

.item .column {
    color: white;
}

.item .detail_button{
	vertical-align: bottom;
	padding: 1em;
	background-color: white;
	color: black;
}



.item  .is-2{
	/*color: black;
	background-color: white;
	border: 1px solid #bdbdbd;*/
/*	display: inline;
*/}
</style>
@endsection