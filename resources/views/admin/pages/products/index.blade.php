@extends('admin.layouts.app')

@section('title', 'GrupoIkki')


@section('content')

    <h1>Listagem de produtos</h1>
    <h1>{!! $valor !!}</h1>





    @if($valor === '123')
        <p>É idêntica</p>
    @else
        <p>Não é idêntico</p>
    @endif

    @unless($valor === '123')
        <p>é verdadeiro</p>
    @else
        <p>é falso</p>
    @endunless

    @isset($valor2)
        {{$valor2}}
    @endisset

    @empty($valor3)
        <p>Variável vazia</p>
    @endempty

    @auth()
        <p>Autenticado</p>
    @else
        <p>não autenticado</p>
    @endauth

    @guest()
        <p>Não autenticado</p>
    @endguest

    @switch($valor)

        @case(123)
        Oba, entrou aqui!
            @break
        @case(2)

            @break
        @case(3)

            @break
    @endswitch

@endsection


