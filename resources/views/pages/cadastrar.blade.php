@extends('layout.main')

@section('title', "Login")

@section('content')
<div class="section-form-title">
    <h2>Cadastre-se</h2>
    <p>Fique sempre atualizado com nossas novidades</p>
</div>

<section class="section-form">
    <div class="container">
        <div class="section-form-content">
            <div class="section-form-img">
                <img src="{{ asset('img/icon-email.png') }}" alt="" class="section-form__thumb">
            </div>

            <div class="section-form-inputs">
                <form method="POST" action="{{ Route('cadastrar') }}" class="section-form__form">
                    @csrf
                    <h3>Nome</h3>
                    <input type="text" name="nome" placeholder="Digite seu nome completo">
                    <h3>Email</h3>
                    <input type="text" name="email" placeholder="Email">
                    <h3>Telefone</h3>
                    <input type="text" name="fone" placeholder="Telefone">
                    <h3>Senha</h3>
                    <input type="password" name="pass" placeholder="Senha"><br>
                    <input type="submit" value="Enviar">
                </form>
            </div>
        </div>
    </div>
</section>

@endsection