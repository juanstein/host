@extends('layouts.master')
@section('content')

  <!-- BODY -->
  <header class="header_body">
    <div class="header-darkener">
      <!--<video autoplay loop>
        <source src="img/spacious.mp4" type="video/mp4">
      </video>-->
      <div class="principal">
        <div class="titulo">
          <h1>Jost</h1>
        </div>
      </div>
      <div class="subtitulo">
        <div class="bajada col-md-12">
          <h2>Encontrá el lugar perfecto y comenzá tu emprendimiento</h2>
        </div>
      </div>
    </div>
      <div class="principal_body">
        <div class="col-md-12 container_jostnumbers">
          <div class="col-md-10 col-md-offset-2 jostnumbers">
            <ul class="col-md-9 jostnumbers_column">
              <li class="col-md-4 jostnumbers_colum_info"><img src="img/login.png"><p class="number textcenter">Regístrate</p><p class="title textcenter">Tenemos más de 20,000 espacios disponibles para vos</p></li>
              <li class="col-md-4 jostnumbers_colum_info"><img src="img/startup.png"><p class="number textcenter">Buscá</p><p class="title textcenter">4 ciudades donde poder poner en marcha tu emprendimiento</p></li>
              <li class="col-md-4 jostnumbers_colum_info"><img src="img/building.png"><p class="number textcenter">Alquilá</p><p class="title textcenter">Poné a andar tus sueños <br> ¿Qué esperas?</p></li>
            </ul>
          </div>
        </div>

    </div>
  </header>

  <!-- COWORKING PLACES -->

  <section class="cowork">
    <div class="col-md-10 col-md-offset-1 cowork_container">
      <ul class="row col-md-12 primera-linea">
        <li class="col-md-4">
          <div class="primeralinea_primerimagen cowork_photobox1">
            <div class="coworktitle">
              <p class="cowork_boxtitle textcenter uppercase">La Maquinita</p>
              <p class="cowork_boxsubtitle textcenter uppercase">- Buenos Aires - </p>
            </div>
          </div>
        </li>

        <li class="col-md-4 primeralinea_segundaimagen_box">
          <div class="cowork_photobox2">
            <div class="coworktitle">
              <p class="cowork_boxtitle textcenter uppercase a3">Area Tres</p>
              <p class="cowork_boxsubtitle textcenter uppercase">- Buenos Aires - </p>
            </div>
          </div>
        </li>

        <li class="col-md-4">
          <div class="primeralinea_terceraimagen cowork_photobox3">
            <div class="coworktitle">
              <p class="cowork_boxtitle textcenter uppercase">Hit</p>
              <p class="cowork_boxsubtitle textcenter uppercase">- Buenos Aires - </p>
            </div>
          </div>
        </li>
      </ul>

      <ul class="row col-md-12 segunda-linea">

        <li class="col-md-4">
          <div class="segundalinea_primerimagen"></div>
        </li>

        <li class="col-md-4 segundalinea_segundaimagen_box">
          <div class="segundalinea_segundaimagen cowork_photobox4">
            <div class="coworktitle">
              <p class="cowork_boxtitle textcenter uppercase">Urban Station</p>
              <p class="cowork_boxsubtitle textcenter uppercase">- Buenos Aires - </p>
            </div>
          </div>
        </li>

        <li class="col-md-4">
          <div class="segundalinea_terceraimagen cowork_photobox5">
            <div class="coworktitle">
              <p class="cowork_boxtitle textcenter uppercase">Join</p>
              <p class="cowork_boxsubtitle textcenter uppercase">- Buenos Aires - </p>
            </div>
          </div>
        </li>
      </ul>

      <ul class="row col-md-12 tercera-linea">

        <li class="col-md-4">
          <div class="cowork_photobox6">
            <div class="coworktitle">
              <p class="cowork_boxtitle textcenter uppercase">Cespedes</p>
              <p class="cowork_boxsubtitle textcenter uppercase">- Buenos Aires - </p>
            </div>
          </div>
        </li>

        <li class="col-md-4">
          <div class="terceralinea_segundaimagen"></div>
        </li>

        <li class="col-md-4">
          <div class="cowork_photobox7">
            <div class="coworktitle">
              <p class="cowork_boxtitle textcenter uppercase">Belephant</p>
              <p class="cowork_boxsubtitle textcenter uppercase">- Buenos Aires - </p>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </section>
@endsection


