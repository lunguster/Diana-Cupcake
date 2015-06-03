 {{--session_name('first');
session_start();
$_SESSION['test'] = 'beleberda';
var_dump($_SESSION);

echo $_COOKIE['first'];
?>--}}

@extends('app')
@section('header')

    <div class="container">
        <div class="logo"></div>
        <input type="radio" name="slides" class="slideSel" id="slide1" checked>
        <input type="radio" name="slides" class="slideSel" id="slide2">
        <input type="radio" name="slides" class="slideSel" id="slide3">
        <input type="radio" name="slides" class="slideSel" id="slide4">
        <input type="radio" name="slides" class="slideSel" id="slide5">
        <input type="radio" name="slides" class="slideSel" id="slide6">

        <div class="slider">

            <div class="captions">
                <div class="c2">Plate</div>
                <div class="c3">Mascarpone</div>
                <div class="c4">Raspberry</div>
                <div class="c5">Milk</div>
                <div class="c6">Chocolate</div>
            </div>

            <div class="img img1">
                <div class="frag frag1"></div>
                <div class="frag frag2"></div>
                <div class="frag frag3"></div>
                <div class="frag frag4"></div>
                <div class="frag frag5"></div>
                <div class="frag frag6"></div>
            </div>
            <div class="img img2">
                <div class="frag frag1"></div>
                <div class="frag frag2"></div>
                <div class="frag frag3"></div>
                <div class="frag frag4"></div>
                <div class="frag frag5"></div>
                <div class="frag frag6"></div>
            </div>
            <div class="img img3">
                <div class="frag frag1"></div>
                <div class="frag frag2"></div>
                <div class="frag frag3"></div>
                <div class="frag frag4"></div>
                <div class="frag frag5"></div>
                <div class="frag frag6"></div>
            </div>
            <div class="img img4">
                <div class="frag frag1"></div>
                <div class="frag frag2"></div>
                <div class="frag frag3"></div>
                <div class="frag frag4"></div>
                <div class="frag frag5"></div>
                <div class="frag frag6"></div>
            </div>
            <div class="img img5">
                <div class="frag frag1"></div>
                <div class="frag frag2"></div>
                <div class="frag frag3"></div>
                <div class="frag frag4"></div>
                <div class="frag frag5"></div>
                <div class="frag frag6"></div>
            </div>
            <div class="img img6">
                <div class="frag frag1"></div>
                <div class="frag frag2"></div>
                <div class="frag frag3"></div>
                <div class="frag frag4"></div>
                <div class="frag frag5"></div>
                <div class="frag frag6"></div>
            </div>
        </div><!-- /.slider -->

        <div class="side-controls">
            <label for="slide1"></label>
            <label for="slide2"></label>
            <label for="slide3"></label>
            <label for="slide4"></label>
            <label for="slide5"></label>
            <label for="slide6"></label>
        </div>

        <div class="controls">
            <label for="slide1"></label>
            <label for="slide2"></label>
            <label for="slide3"></label>
            <label for="slide4"></label>
            <label for="slide5"></label>
            <label for="slide6"></label>
        </div>

    </div><!-- /.container -->

    <div class="container-fluid" id="midLine"></div>
    <div class="container-fluid" id="midLine"></div>
    <div class="container-fluid" id="midLine"></div>
    <header>
        <nav class="top-menu">

            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="gallery.html">Galerie</a></li>
                <li><a href="comanda.html">Comanda</a></li>
                <li><a href="#">Contacte</a></li>
            </ul>
        </nav>

    </header>


@endsection


@section('content')
    <div>
        {!! link_to_route('posts.index', 'published') !!} &nbsp;&nbsp;&nbsp; {!! link_to_route('posts.unpublished', 'unpublished') !!}
    </div>
    <div>{!! link_to_route('posts.create', 'create') !!} </div>

        <div class="row">
     @foreach($posts as $post)
        <article class="col-md-4">
            <h2>{!! link_to_route('posts.show', $post->title, array($post->id)) !!}</h2>

            <p>
              {!!$post->content!!}
            </p>
            <p>
              published:  {!!$post->published_at!!}
            </p>
            <p>{!!$post->id!!}</p>
        </article>
     @endforeach
    </div>
@stop