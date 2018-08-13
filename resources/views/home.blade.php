@extends('layouts.app')

@section('styles')
<link href="{{ asset('fontend/css/font.css') }}" rel="stylesheet">
@endsection

@section('carrosel')

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="http://guiadanetflix.com.br/wp-content/uploads/2017/10/at%C3%A9-o-ultimo-homem-guerra.jpg" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                    <h5>Até o Último Homem</h5>
                    <p>Durante a Segunda Guerra Mundial,
                         médico do exército Desmond T. Doss (Abdrew Garfield) se recusa a pegar em uma arma e matar pessoas,
                         porém, durante a Batalha de Okinawa ele trabalha na ala médica e salva mais de 75 homens,
                         sendo condecorado.
                         O que faz de Doss o primeiro Opositor Consciente da história norte-americana a receber
                          a Medalha de Honra do Congresso.
                    </p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="http://guiadanetflix.com.br/wp-content/uploads/2017/10/at%C3%A9-o-ultimo-homem-guerra.jpg" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                    <h5>Até o Último Homem</h5>
                    <p>Durante a Segunda Guerra Mundial,
                         médico do exército Desmond T. Doss (Abdrew Garfield) se recusa a pegar em uma arma e matar pessoas,
                         porém, durante a Batalha de Okinawa ele trabalha na ala médica e salva mais de 75 homens,
                         sendo condecorado.
                         O que faz de Doss o primeiro Opositor Consciente da história norte-americana a receber
                          a Medalha de Honra do Congresso.
                    </p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="https://optclean.com.br/wp-content/uploads/2017/01/filmes-mais-pirateados-da-semana-23-de-janeiro-de-2017-4.jpg" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                    <h5>Até o Último Homem</h5>
                    <p>Durante a Segunda Guerra Mundial,
                         médico do exército Desmond T. Doss (Abdrew Garfield) se recusa a pegar em uma arma e matar pessoas,
                         porém, durante a Batalha de Okinawa ele trabalha na ala médica e salva mais de 75 homens,
                         sendo condecorado.
                         O que faz de Doss o primeiro Opositor Consciente da história norte-americana a receber
                          a Medalha de Honra do Congresso.
                    </p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
</div>

@endsection

@section('content')



@endsection
