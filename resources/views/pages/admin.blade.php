@extends('layout.main')

@section('title', 'admin')

@section('content')

<div class="section-admin-title">
    <h2 class="text-center">cadastrar anuncios</h2>
</div>

<div class="section-admin-title-form">
    <form method="POST" action="" > 
        @csrf
        <h4>Título</h4>
        <input type="text" name="titulo">
        <h4>Descrição</h4>
        <input type="text" name="description">
        <h4>Localização</h4>
        <input type="text" name="localizacao">
        <h4>Preço</h4>
        <input type="text" name="preco"><br>
        <input type="submit" value="enviar">
    </form>
</div>

@endsection