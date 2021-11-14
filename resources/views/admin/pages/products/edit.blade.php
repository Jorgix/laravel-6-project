@extends('admin.layouts.app')

@section('title','Editar um produto')

@section('content')

    <h1>Editar um produto: {{$id}}</h1>

    <form action="{{ route('products.update', $id) }}" method="post">
        @method('PUT')
        @csrf
        <input type="text" name="name" placeholder="Digite seu nome">
        <input type="email" name="email" placeholder="Digite seu e-mail">
        <button type="submit">Enviar</button>
    </form>




@endsection
