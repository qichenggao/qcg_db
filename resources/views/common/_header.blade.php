<div id="loading">
    <img src="{{ asset('img/loading.png') }}" id="load">
    <div id="latido" class="loadingGlow"></div>
    <div id="circle"></div>
</div>
<header>
  <div class="logo">
    <a href="index.html">
@if (route_class() == 'articles')
        <img src="{{ asset('img/logo-salmon.png') }}" class="salmon"/>
@else
        <img src="{{ asset('img/logo-salmon.png') }}" class="salmon"/>
        <img src="{{ asset('img/logo-azul.png') }}" class="blue"/>
@endif
    </a>
  </div>
  <div class="btnMenu"><i></i><i></i><i></i></div>
  <nav>
    <div class="botonera">
        <i></i>
        <ul>
          <li><a href="index.html" class="act">home<i></i></a></li>
          <li><a href="estudio.html">estudio<i></i></a></li>
          <li><a href="proyectos.html">proyectos<i></i></a></li>
          <li><a href="reglas.html">reglas<i></i></a></li>
          <li><a href="contacto.html">contacto<i></i></a></li>
        </ul>
        <i></i>
    </div>
  </nav>
</header>
@if (route_class() != 'articles')
<div id="nav_main">
    <div class="nav-main" data-section="inicio"></div>
    <div class="nav-main" data-section="article"></div>
    <div class="nav-main" data-section="slide2"></div>
    <div class="nav-main" data-section="slide3"></div>
</div>
@endif