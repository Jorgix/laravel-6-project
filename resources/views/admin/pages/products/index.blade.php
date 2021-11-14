@extends('admin.layouts.app')


@section('title', 'GrupoIkki')


@section('content')


    <a href="{{ route('products.create') }}">Cadastrar</a>

    <hr>

    <h1>Listagem de produtos</h1>
    <h1>{!! $valor !!}</h1>

    @component('admin.components.card')
        @slot('title')
            <h1>Título do card</h1>
        @endslot

        Um card de exemplo
    @endcomponent



    <hr>

    @include('admin.includes.alerts', ['content' => 'Alerta de preços de produtos'])

    @if(isset($produtos))
            @foreach($produtos as $produto)
                <p class="@if ($loop->last) last @endif">{{ $produto }}</p>
            @endforeach
    @endif


    <hr>

        @forelse($produtos as $produto)

            <p class="@if($loop->first) first @endif">{{$produto}}</p>

        @empty

            <p>Não existem produtos cadastrados</p>

        @endforelse

    <hr>



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


@push('styles')
    <style>
        .last{
            background: red;
            padding: 5px;
        }
        .first{
            background: red;
            padding: 5px;
        }
    </style>
@endpush

@push('scripts')
    <script>
    document.body.style.background = '#efefef'
    </script>
@endpush




