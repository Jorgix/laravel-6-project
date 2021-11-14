@extends('admin.layouts.app')

@section('title','Cadastro de produto')

@section('content')



    <h1>Cadastrar novo produto</h1>
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li> {{$error}}</li>
            @endforeach

        </ul>

    @endif
    <form action="{{ route('products.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <p><input type="text" name="name" placeholder="Digite seu nome"></p>
        <p><input type="email" name="email" placeholder="Digite seu e-mail"></p>
        <p><input type="file" name="photo"></p>
        <button type="submit">Enviar</button>
    </form>
@endsection
