@extends('layouts.app')

@section('navegacion')
    @include('ui.categoriasnav')
@endsection

@section('content')
    <div class="flex flex-col lg:flex-row shadow bg-white">
        <div class="lg:w-3/5 px-8 lg:px-12 py-12 lg:py-16">
            <p class="text-2xl text-gray-700">
                Upvt<span class="font-bold">Jobs</span>
            </p>
            <h1 class="mt-2 sm:mt-4 text-3xl font-bold text-gray-700 leading-tight">
                Encuentra un Trabajo en tu Ciudad
                <span class="text-green-500 block">Para  los alumnos/Egresados de la Upvt</span>
            </h1>

            @include('ui.buscar')

        </div>
        <div class="block lg:w-2/5">
            <h1 class="mt-2 sm:mt-4 text-3xl font-bold text-gray-700 text-center">
                Sí eres Reclutador<span class="text-green-500 block">Registrate y crea tus Vacantes</span>
            </h1>
            <div>
                <img class="inset-0 w-full object-cover mt-5" src="{{ secure_asset('img/05.jpg') }}" alt="devjobs">
            </div>

        </div>
    </div>

    <div class="my-10 bg-gray-100 p-10 shadow">
        <h1 class="text-3xl text-gray-700 m-0">
            Nuevas <span class="font-bold">Vacantes</span>
        </h1>

        @include('ui.listadovacantesPrincipal')
    </div>

@endsection
