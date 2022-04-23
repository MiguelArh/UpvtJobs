@extends('layouts.app')

@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" integrity="sha512-ZKX+BvQihRJPA8CROKBhDNvoc2aDMOdAlcm7TUQY+35XYtrd3yh95QOOhsPDQY9QnKE0Wqag9y38OIgEvb88cA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('navegacion')

    @include('ui.categoriasnav')

@endsection

@section('content')
    <h1 class="text-3xl text-center mt-10"> {{$vacante->titulo}} </h1>
    <div class="mt-10 mb-20 md:flex items-start">

        <div class="md:w-3/5 text-justify mx-3">
            <p class="block text-gray-700 font-bold my-2"> 
                Publicado: <span class="font-normal"> {{$vacante->created_at->diffForHumans()}} </span>
                Por: <span class="font-normal"> {{$vacante->reclutador->name}} </span>

            </p>

            <p class="block text-gray-700 font-bold my-2">
                Empresa: <span class="font-normal"> {{$vacante->empresa}} </span>
            </p>

            <p class="block text-gray-700 font-bold my-2">
                Categoria: <span class="font-normal"> {{$vacante->categoria->nombre}} </span>
            </p>

            <p class="block text-gray-700 font-bold my-2">
                Salario: <span class="font-normal"> {{$vacante->salario->nombre}} </span>
            </p>

            <p class="block text-gray-700 font-bold my-2">
                Ubicación: <span class="font-normal"> {{$vacante->ubicacion->nombre}} </span>
            </p>
            <p class="block text-gray-700 font-bold my-2">
                Experiencia: <span class="font-normal"> {{$vacante->experiencia->nombre}} </span>
            </p>



            <a href="/storage/vacantes/{{$vacante->imagen}}" data-lightbox="imagen" data-title="Vacante {{$vacante->titulo}}" >
                <img src="/storage/vacantes/{{$vacante->imagen}} " class="w-40 mt-10" alt="">
            </a>
            <div class="mt-10 mb-5">
                {!! $vacante->descripcion !!}
            </div>

        </div>

        @if($vacante->activa === 1)
            @include('ui.contacto')
        @endif



    </div>
@endsection
