@extends('common.app')

@section('title','首页')

@section('content')
<section id="inicio" class="salmonGlow in" data-rel="#article">
     <div class="splash layer" data-depth="0.60" style="z-index:9999;margin-left:1%;">
        <div class="welcome" style="height:500px; width:630px; text-align:left" ><br>
            <hr class="fat blue">
            <p >
                <strong>开发中</strong>茁壮成长...
            </p>
            <hr>
        </div>
    </div>
    <div class="splash layer" data-depth="0.30" style="z-index:2"><img src="{{ asset('img/splash-welcome.png') }}"></div>
    <div class="splash layer" data-depth="0.20" style="z-index:1"><img src="{{ asset('img/particles-welcome.png') }}" style="opacity:0.4"></div>
    <a href="#article" class="arrowDown"><img src="{{ asset('img/arrow-home.png') }}" ></a>
</section>


<section id="article" class="blueGlow in" data-rel="#slide2">
    <div class="wpCont layer" data-depth="0.0">
        <div class="welcome">
            <hr class="fat">
            <p>
                <strong>hablemos</strong>
            </p>
            <hr>
        </div>
        <div class="bajada">
            <strong>Qué esperas para contactarnos? </strong>
            <br>
            Escribinos a <a href="mailto:hola@estudionk.com">hola@estudionk.com</a> o llamanos al +54 911 4161 2680
        </div>
        <div class="wpBoxCont">
            <div class="boxCont">
                <h2>nuestras oficinas</h2>
                <p><strong>Buenos Aires</strong><br>
                Av. del Libertador 6680, 1º.
                (CP1428), Buenos Aires.<br>
                +54 911 4161 2680</p>
            </div>
            <div class="boxCont">
                <h2>DESARROLLO DE NEGOCIOS</h2>
                <p><strong>Lucas Nikitczuk</strong><br>
                Director/Diseñador<br>
                +54 911 4161 2680<br><br></p>
            </div>
            <div class="boxCont">
                <h2>buscando un cambio?</h2>
                <p>Siempre estamos buscando gente
                que realmente ame lo que hace,
                si sos uno de ellos escribinos a</p>
            </div>
        </div>
        <div class="clear"></div>
        <div class="mailOver">
            <div class="arrowIr"></div>
        </div>
    </div>
    <div class="splash layer" data-depth="0.30" ><img src="{{ asset('img/splash-estudio.png') }}"></div>
    <div class="splash layer" data-depth="0.20" ><img src="{{ asset('img/particles-estudio.png') }}"></div>
    <a href="#slide2" class="arrowDown"><img src="{{ asset('img/arrow-home-salmon.png') }}"></a>
</section>

<section id="slide2" class="salmonGlow" data-rel="#slide3">
     <div class="splash layer" data-depth="0.60" style="z-index:9999;margin-top:10%;margin-left:2%;">
        <div class="welcome" style="height:400px; width:660px; text-align:left; margin-top:5%" ><br>
            <hr class="fat blue">
            <p>
                <strong>111</strong>222
            </p>
            <hr>
        </div>
    </div>
    <div class="splash layer" data-depth="0.20" style="z-index:1;margin-top:20%;"><img src="{{ asset('img/particles-agencia.png') }}" style="opacity:0.4"></div>
    <div class="splash layer" data-depth="0.30" style="z-index:2; margin-left:1%;"><img src="{{ asset('img/splash-agencia.png') }}"></div>
    <a href="#slide3" class="arrowDown"><img src="{{ asset('img/arrow-home.png') }}"></a>
</section>

<section id="slide3" class="blueGlow">
    <div class="wpJobs">
        <ul id="hexGrid">
            <li class="hex">
                <a class="hexIn" href="#">
                    <img src="img/1.png" alt="" />
                    <h1>This is a title</h1>
                    <p>Some sample text about the article this hexagon leads to</p>
                </a>
            </li>
            <li class="hex">
                <a class="hexIn" href="#">
                    <img src="img/2.png" alt="" />
                    <h1>This is a title</h1>
                    <p>Some sample text about the article this hexagon leads to</p>
                </a>
            </li>
            <li class="hex">
                <a class="hexIn" href="#">
                    <img src="img/3.png" alt="" />
                    <h1>This is a title</h1>
                    <p>Some sample text about the article this hexagon leads to</p>
                </a>
            </li>
            <li class="hex">
                <a class="hexIn" href="#">
                    <img src="img/4.png" alt="" />
                    <h1>This is a title</h1>
                    <p>Some sample text about the article this hexagon leads to</p>
                </a>
            </li>
            <li class="hex">
                <a class="hexIn" href="#">
                    <img src="img/5.png" alt="" />
                    <h1>This is a title</h1>
                    <p>Some sample text about the article this hexagon leads to</p>
                </a>
            </li>
            <li class="hex">
                <a class="hexIn" href="#">
                    <img src="img/6.png" alt="" />
                    <h1>This is a title</h1>
                    <p>Some sample text about the article this hexagon leads to</p>
                </a>
            </li>
            <li class="hex">
                <a class="hexIn" href="#">
                    <img src="img/7.png" alt="" />
                    <h1>This is a title</h1>
                    <p>Some sample text about the article this hexagon leads to</p>
                </a>
            </li>
            <li class="hex">
                <a class="hexIn" href="#">
                    <img src="img/8.png" alt="" />
                    <h1>This is a title</h1>
                    <p>Some sample text about the article this hexagon leads to</p>
                </a>
            </li>
            <li class="hex">
                <a class="hexIn" href="#">
                    <img src="img/1.png" alt="" />
                    <h1>This is a title</h1>
                    <p>Some sample text about the article this hexagon leads to</p>
                </a>
            </li>
            <li class="hex">
                <a class="hexIn" href="#">
                    <img src="img/2.png" alt="" />
                    <h1>This is a title</h1>
                    <p>Some sample text about the article this hexagon leads to</p>
                </a>
            </li>
            <li class="hex">
                <a class="hexIn" href="#">
                    <img src="img/3.png" alt="" />
                    <h1>This is a title</h1>
                    <p>Some sample text about the article this hexagon leads to</p>
                </a>
            </li>
            <li class="hex">
                <a class="hexIn" href="#">
                    <img src="img/4.png" alt="" />
                    <h1>This is a title</h1>
                    <p>Some sample text about the article this hexagon leads to</p>
                </a>
            </li>
            <li class="hex">
                <a class="hexIn" href="#">
                    <img src="img/5.png" alt="" />
                    <h1>This is a title</h1>
                    <p>Some sample text about the article this hexagon leads to</p>
                </a>
            </li>
            <li class="hex">
                <a class="hexIn" href="#">
                    <img src="img/6.png" alt="" />
                    <h1>This is a title</h1>
                    <p>Some sample text about the article this hexagon leads to</p>
                </a>
            </li>
        </ul>
        <div  class="more"><a href="{{ route('articles.index') }}"><strong>MORE...</strong></a></div>
    </div>


    <div></div>
    <div class="splash layer" data-depth="0.50" style="margin-top:20%"><img src="{{ asset('img/particles-jobs.png') }}"></div>
    <div class="splash layer" data-depth="0.20" style="margin-top:25%"><img src="{{ asset('img/splash-jobs.png') }}" width="600"></div>
</section>
@stop






@section('styles_js')
<link href="{{ asset('css/reset.css') }}" rel="stylesheet">
<link href="{{ asset('css/css.css') }}" rel="stylesheet">
<link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
<link href="{{ asset('fonts/fonts.css') }}" rel="stylesheet">
<link href="{{ asset('css/hexagons.css') }}" rel="stylesheet">
<script src="{{ asset('js/jquery-1.11.2.min.js') }}"></script>
<script src="{{ asset('js/jquery.easing.js') }}"></script>
<script src="{{ asset('js/jquery.flexslider-min.js') }}"></script>
<!--<script src="{{ asset('js/jquery.mousewheel.js') }}"></script>-->
@stop

@section('footer_js')
<script src="{{ asset('js/parallax.js') }}"></script>
<script src="{{ asset('js/js.js') }}"></script>
<script>
$(document).ready(function(){
//PARALLAX
//if($(window).width() > 768){
    var scene = document.getElementById('inicio');
    var scene1 = document.getElementById('article');
    var scene2 = document.getElementById('slide2');
    var scene3 = document.getElementById('slide3');
    var parallax = new Parallax(scene);
    var parallax = new Parallax(article);
    var parallax = new Parallax(slide2);
    var parallax = new Parallax(slide3);
//}
//CANTIDAD SLIDES
  var cantSlide = $('.flexManifiesto ul.slides li').length;
  $('#cant').html('/'+cantSlide);
  $('.flexSivori').flexslider({
    animation: "fade"
  });
  $('.flexManifiesto').flexslider({
    animation: "slide"
  });
  //HEADER SCROLL
    $(window).scroll(function(e){
        var scrol = $(window).scrollTop();
        var section = $('section').height() - 100;
        if(scrol >= section && scrol < (section*2)){
            $('#home header').addClass('headSalmon');
            $('nav').addClass('navBlue');
        }else if(scrol > (section*3)){
            $('#home header').addClass('headSalmon');
            $('nav').addClass('navBlue');
        }else{
            $('#home header').removeClass('headSalmon');
            $('nav').removeClass('navBlue');
        }
        navMainScroll()
    });
});
//botoncitos
navMainScroll()

$(".nav-main").on('click', function(e){
    e.preventDefault();
    var newtop = $("#"+$(this).data("section")).offset().top;
    scrolling=true;
    $("html,body").stop(true,true).animate({scrollTop:  newtop + "px"}, 300,function(){
        scrolling=false;
    });
});
function navMainScroll(){
    var scrol = $(window).scrollTop();
    // nav lateral
    $(".nav-main").each(function(e,i){
        var sec = $("#"+$(this).data("section"));

        if (!sec.offset()) return
            if( (scrol+$(window).height()/2) >= sec.offset().top && (sec.offset().top+$(window).height()) > scrol && !sec.hasClass("active")){
            $(".nav-main").removeClass("active");
            $(this).addClass("active");
        }
    });
}
/*mouseWhell*/
if($(window).width() > 768){

    var scrol = 0;
    var handleAvailable = true;

    // function sube(){
    //     window.onmousewheel = document.onmousewheel = null;
    //     window.removeEventListener('DOMMouseScroll', wheel, false);
    //             handleAvailable = true;
    //     $(window).scroll(function(){
    //         //alert($('body').scrollTop());
    //         //alert($('#slide3').offset().top);
    //         if($('body').scrollTop() < $('#slide3').offset().top){
    //             scroll=1;
    //             window.onmousewheel = document.onmousewheel = wheel;
    //             window.addEventListener('DOMMouseScroll', wheel, false);
    //             // handle(1);
    //         }
    //     });
    // }
    function handle(delta) {

        //window.onmousewheel = document.onmousewheel = wheel;
        //window.addEventListener('DOMMouseScroll', wheel, false);

        if(handleAvailable == true){

            if (delta < 0){
                handleAvailable = false;

                if(scrol == 0){
                    playSection('article', 0);
                    scrol = 1;

                }else if(scrol == 1){
                    playSection('slide2', 0);
                    scrol = 2;

                }else if(scrol == 2){
                    playSection('slide3', 0);
                    scrol = 3;

                }else if(scrol == 3){
                    //playSection('slide3', 350);
                    window.onmousewheel = document.onmousewheel = null;
                    window.removeEventListener('DOMMouseScroll', wheel, false);
                   // sube();
                    scrol = 4;
                }else if(scrol == 4){
                    playSection('footer', 0);
                    scrol = 4;
                }
            }
            else if(delta > 0){
                console.log(scrol);
                handleAvailable = false;

                if(scrol == 4){
                    //playSection('slide3', 350);
                    scrol = 3;
                }else if(scrol == 3){
                    playSection('slide3', 0);
                    scrol = 2;
                }else if(scrol == 2){
                    playSection('slide2', 0);
                    scrol = 1;
                }else if(scrol == 1){
                    playSection('article', 0);
                    scrol = 0;
                } else if(scrol == 0){
                    playSection('inicio', 0);
                    scrol = 0;
                }
            }
        }
    }

    function playSection(section, x){

        $('html, body').animate({scrollTop: $('#'+section).offset().top + x}, 300);
        setTimeout(function(){
            handleAvailable = true; // una vez que termina el video habilito el scroll de nuevo
        }, 1000);
    }

    function wheel(event){
            var delta = 0;
            if (!event)
                    event = window.event;
            if (event.wheelDelta) {
                    delta = event.wheelDelta/120;
            } else if (event.detail) {
                    delta = -event.detail/3;
            }
            if (delta)
                    handle(delta);

            if (event.preventDefault)
                    event.preventDefault();
            event.returnValue = false;
    }
    if (window.addEventListener)
            /** DOMMouseScroll is for mozilla. */
            window.addEventListener('DOMMouseScroll', wheel, false);
    /** IE/Opera. */
    window.onmousewheel = document.onmousewheel = wheel;

}
</script>

@stop
