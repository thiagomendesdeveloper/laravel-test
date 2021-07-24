@extends('layout.main')

@section('title', "Home")

@section('content')

<div class="component-destaque c-carousel c-carousel--simple">

<div class="c-carousel__slides js-carousel--simple">

    <div class="component-destaque-block c-carousel__slide">
        <hgroup class="component-destaque-text text-center">
            <h1 data-aos="fade-down" data-aos-duration="2000">Qualidade e conforto</h1>
            <p class="component-destaque__p" data-aos="fade-right" data-aos-duration="2000">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <a href="#" class="component-destaque__buttom">Conhecer</a>
        </hgroup>
    </div>

</div>

</div>

<section class="component-section-clients">
    <div class="container">

    <div class="component-section-clients-content">
        <div class="component-section-clientes-text">
            <h2 data-aos="fade-right" data-aos-duration="2000">Conheça nossos serviços</h2>
            <p data-aos="fade-right" data-aos-duration="2000">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, odit maxime quidem cumque iure, eligendi id velit necessitatibus magni voluptatum quaerat voluptas blanditiis labore ut dolores laborum esse nobis animi.</p>
            <a href="" class="componente-section-clients__buttom">Conhecer</a>
        </div>
        <img src="{{ asset('img/recep.png') }}" class="component-section-clientes__img" data-aos="fade-left" data-aos-duration="3000">
    </div>

    <div class="animation-count">

    <div data-aos="fade-down" data-aos-duration="1000"><h1>Imóveis</h1><h1 id="imoveis"></h1></div>
    <div data-aos="fade-down" data-aos-duration="3000"><h1>Apartamento</h1><h1 id="apartamento"></h1></div>
    <div data-aos="fade-down" data-aos-duration="3000"><h1>hotel</h1><h1  id="hotel"></h1></div>


    </div>
</section>

<section class="component-section-cards">
    <div class="container">
        <div class="component-section-cards__grid">
            <article class="component-section-cards__card" data-aos="flip-down" data-aos-duration="3000">
                <figure>
                    <img src="{{ asset('img/Imoveis.png') }}" alt="" style="width:100px;">
                    <h4>Imóveis</h4>
                </figure>
                <div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Officiis molestiae a deserunt inventore aliquid ea impedit maxime,
                        sit possimus esse natus nobis exercitationem eum,
                    </p>
                    
                </div>
            </article>

            <article class="component-section-cards__card" data-aos="flip-down" data-aos-duration="3000">
                <figure>
                    <img src="{{ asset('img/apartamentos.png') }}" alt="" style="width:100px;">
                    <h4>apartamentos</h4>
                </figure>
                <div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Officiis molestiae a deserunt inventore aliquid ea impedit maxime,
                        sit possimus esse natus nobis exercitationem eum,
                    </p>
                </div>
            </article>

            <article class="component-section-cards__card" data-aos="flip-down" data-aos-duration="3000">
                <figure>
                    <img src="{{ asset('img/Hoteis.png') }}" alt="" style="width:100px;">
                    <h4>Hóteis</h4>
                </figure>
                <div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Officiis molestiae a deserunt inventore aliquid ea impedit maxime,
                        sit possimus esse natus nobis exercitationem eum,
                    </p>
                </div>
            </article>

           
        </div>
    </div>
</section>

<section class="componente-section-info">
    <h3 data-aos="fade-left">O s melhores Hoteis estão aqui entre em contato conosco</h3>
</section>



<section class="componente-section-imoveis">
    <div class="container">
        <h2 class="text-center">Imóveis destaques</h2>
        <div class="componente-section-imoveis-destaques">
            <img src="{{ asset('img/app-1.jpg') }}" alt="" class="componente-section-imoveis-destaques__img">
            <div class="componente-section-imoveis-destaques__content p-3">
            <h4 class="componente-section-imoveis-destaques__h4">Disponível</h4>
                <h3 class="mt-3">Hotel Dev</h3>
                <p>
                2 Vagas
                87,15m² | 90,08m²
                3 suítes (sendo uma reversível e uma com closet)
            </p>

            <p>Location: Barra do Ceará | City: Fortaleza</p>
            <p></p>
            
            <p>R$: 500,00 <strong>R$: 400,00</strong></p>

            <a href="#" class="componente-section-imoveis-destaques__buttom">Visitar</a>
                
        </div>
    </div>
    
        <!-- <div class="text-center">
        <a href="#" class="componente-section-imoveis-destaques__buttom">Ver Mais</a>
        </div> -->

        <x-buttom text="Saiba Mais" link="#" />
        
</section>



<!-- <section class="componente-section-newslatter">
    <div class="container">
        <h2 class="text-center">Newslatter</h2>

        <div class="componente-section-newslatter-flex">

            <form action="">
                <h4>Email</h4>
                <input type="email">
                <input type="submit" value="Enviar">
            </form>

        </div>
    </div>
</section> -->


@endsection