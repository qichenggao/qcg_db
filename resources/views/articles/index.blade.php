@extends('common.app')

@section('title','LifeStyle')

@section('content')
<section id="proyectos" class="blueGlow in">
    <div class="wpCont layer" data-depth="0.0">
        <div class="welcome">
            <hr class="fat">
            <p>
                <strong>LifeStyle</strong>
            </p>
            <hr>
        </div>
        <div class="wpProy">
            <article class="jq22-container">
                <div class="content">
                    <div class="chroma-gallery mygallery">
                        <img src="{{ asset('img/thumbs/1.jpg') }}" alt="Pic 1" data-largesrc="{{ asset('img/1.jpg') }}">
                        <img src="{{ asset('img/thumbs/2.jpg') }}" alt="Pic 2" data-largesrc="{{ asset('img/2.jpg') }}">
                        <img src="{{ asset('img/thumbs/3.jpg') }}" alt="Pic 3" data-largesrc="{{ asset('img/3.jpg') }}">
                        <img src="{{ asset('img/thumbs/4.jpg') }}" alt="Pic 4" data-largesrc="{{ asset('img/4.jpg') }}">
                        <img src="{{ asset('img/thumbs/5.jpg') }}" alt="Pic 5" data-largesrc="{{ asset('img/5.jpg') }}">
                        <img src="{{ asset('img/thumbs/6.jpg') }}" alt="Pic 6" data-largesrc="{{ asset('img/6.jpg') }}">
                        <img src="{{ asset('img/thumbs/7.jpg') }}" alt="Pic 7" data-largesrc="{{ asset('img/7.jpg') }}">
                        <img src="{{ asset('img/thumbs/8.jpg') }}" alt="Pic 8" data-largesrc="{{ asset('img/8.jpg') }}">
                        <img src="{{ asset('img/thumbs/9.jpg') }}" alt="Pic 9" data-largesrc="{{ asset('img/9.jpg') }}">
                        <img src="{{ asset('img/thumbs/10.jpg') }}" alt="Pic 10" data-largesrc="{{ asset('img/10.jpg') }} }}">
                        <img src="{{ asset('img/thumbs/1.jpg') }}" alt="Pic 1" data-largesrc="{{ asset('img/1.jpg') }}">
                        <img src="{{ asset('img/thumbs/2.jpg') }}" alt="Pic 2" data-largesrc="{{ asset('img/2.jpg') }}">
                        <img src="{{ asset('img/thumbs/3.jpg') }}" alt="Pic 3" data-largesrc="{{ asset('img/3.jpg') }}">
                        <img src="{{ asset('img/thumbs/4.jpg') }}" alt="Pic 4" data-largesrc="{{ asset('img/4.jpg') }}">
                        <img src="{{ asset('img/thumbs/5.jpg') }}" alt="Pic 5" data-largesrc="{{ asset('img/5.jpg') }}">
                        <img src="{{ asset('img/thumbs/6.jpg') }}" alt="Pic 6" data-largesrc="{{ asset('img/6.jpg') }}">
                        <img src="{{ asset('img/thumbs/7.jpg') }}" alt="Pic 7" data-largesrc="{{ asset('img/7.jpg') }}">
                        <img src="{{ asset('img/thumbs/8.jpg') }}" alt="Pic 8" data-largesrc="{{ asset('img/8.jpg') }}">
                        <img src="{{ asset('img/thumbs/9.jpg') }}" alt="Pic 9" data-largesrc="{{ asset('img/9.jpg') }}">
                        <img src="{{ asset('img/thumbs/10.jpg') }}" alt="Pic 10" data-largesrc="{{ asset('img/10.jpg') }} }}">
                        <img src="{{ asset('img/thumbs/1.jpg') }}" alt="Pic 1" data-largesrc="{{ asset('img/1.jpg') }}">
                        <img src="{{ asset('img/thumbs/2.jpg') }}" alt="Pic 2" data-largesrc="{{ asset('img/2.jpg') }}">
                        <img src="{{ asset('img/thumbs/3.jpg') }}" alt="Pic 3" data-largesrc="{{ asset('img/3.jpg') }}">
                        <img src="{{ asset('img/thumbs/4.jpg') }}" alt="Pic 4" data-largesrc="{{ asset('img/4.jpg') }}">
                        <img src="{{ asset('img/thumbs/5.jpg') }}" alt="Pic 5" data-largesrc="{{ asset('img/5.jpg') }}">
                        <img src="{{ asset('img/thumbs/6.jpg') }}" alt="Pic 6" data-largesrc="{{ asset('img/6.jpg') }}">
                        <img src="{{ asset('img/thumbs/7.jpg') }}" alt="Pic 7" data-largesrc="{{ asset('img/7.jpg') }}">
                        <img src="{{ asset('img/thumbs/8.jpg') }}" alt="Pic 8" data-largesrc="{{ asset('img/8.jpg') }}">
                        <img src="{{ asset('img/thumbs/9.jpg') }}" alt="Pic 9" data-largesrc="{{ asset('img/9.jpg') }}">
                        <img src="{{ asset('img/thumbs/10.jpg') }}" alt="Pic 10" data-largesrc="{{ asset('img/10.jpg') }} }}">
                    </div>
                </div>
            </article>
            <div class="articles-page">
                <ul class="articles-pages">
                    <li><a href="#">Previous</a></li>
                    <li><a href="#">Next</a></li>
                </ul>
                <ol class="articles-num">
                    <li><strong><a>1/3</a></strong></li>
                </ol>
            </div>
        </div>
    </div>
    <div class="splash layer" data-depth="0.10"><img src="img/splash-proyectos.png"></div>
</section>
@stop






@section('styles_js')
<link href="{{ asset('css/reset.css') }}" rel="stylesheet">
<link href="{{ asset('css/css.css') }}" rel="stylesheet">
<link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
<link href="{{ asset('fonts/fonts.css') }}" rel="stylesheet">
<link href="{{ asset('css/chromagallery.min.css') }}" rel="stylesheet">


<script src="{{ asset('js/jquery-1.11.2.min.js') }}"></script>
<script src="{{ asset('js/jquery.easing.js') }}"></script>
<script src="{{ asset('js/jquery.flexslider-min.js') }}"></script>
<script src="{{ asset('js/jquery.mousewheel.js') }}"></script>
@stop

@section('footer_js')
<script src="{{ asset('js/parallax.js') }}"></script>
<script>
$(document).ready(function(e) {
    var scene3 = document.getElementById('proyectos');
    var parallax = new Parallax(scene3);
});
</script>
<script src="{{ asset('js/js.js') }}"></script>
<script src="{{ asset('js/chromagallery.pkgd.min.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $(".mygallery").chromaGallery
        ({
            color:'#000',
            gridMargin:15,
            maxColumns:5,
            dof:true,
            screenOpacity:0.8
        });
    });

</script>
@stop




