<aside class="md:w-2/5 bg-green-500 p-2 rounded m-3">
    <h2 class="text-xl my-5 text-white uppercase font-bold text-center">Postulate a la Vacante</h2>

    <form action=" {{route('candidatos.store')}} " method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-4 mx-2">
            <label for="nombre" class="block text-white text-sm font-bold mb-4">Nombre:</label>
            <input
                type="text"
                id="nombre"
                class="p-3 bg-white rounded-md form-input w-full @error('nombre') border border-red-500 @enderror "
                name="nombre"
                placeholder="Tu nombre"
                value="{{old('nombre')}}"
            />

            @error('nombre')
                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 w-full mt-5" role="alert">
                    <p>{{$message}}</p>
                </div>
            @enderror

        </div>

        <div class="mb-4 mx-2">
            <label for="email" class="block text-white text-sm font-bold mb-4">Email:</label>
            <input
                type="email"
                id="email"
                class="p-3 bg-white rounded-md form-input w-full
                @error('email')
                    border border-red-500
                @enderror "
                name="email"
                placeholder="Escribe tu email"
                value=" {{old('email')}} "
            />

            @error('email')
                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 w-full mt-5" role="alert">
                    <p>{{$message}}</p>
                </div>
            @enderror

        </div>

        <div class="mb-4 mx-2">
            <label for="cv" class="block text-white text-sm font-bold mb-4">Curriculum (PDF):</label>
            <input
                type="file"
                id="cv"
                class="block w-full cursor-pointer bg-gray-50 border border-gray-300 text-gray-900 focus:outline-none focus:border-transparent text-sm rounded-lg
                @error('cv')
                    border border-red-500
                @enderror "
                name="cv"
                accept="application/pdf"

            />

            @error('cv')
                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 w-full mt-5" role="alert">
                    <p>{{$message}}</p>
                </div>
            @enderror

        </div>

        <input type="hidden" name="vacante_id" value=" {{$vacante->id}} ">
        <input
            type="submit"
            class=" border-green-500 w-full
            text-gray-700 p-3
            hover:bg-green-900 hover:text-white
            focus:outline-none
            focus-shadow-outline uppercase font-bold
            rounded-lg"
            value="Enviar Datos">

    </form>

</aside>
