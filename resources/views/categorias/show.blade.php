@extends('layouts.app')

@section('navegacion')
    @include('ui.categoriasnav')
@endsection

@section('content')

    <div class="my-10 bg-gray-100 p-10 shadow">
        <h1 class="text-3xl text-gray-700 m-0">
            Categoria:
            <span class="font-bold"> {{$categoria->nombre}}</span>
        </h1>

        <div class="mt-0 mb-10 font-semibold ">
            @include('ui.listadovacantes')
        </div>


    </div>

@endsection
