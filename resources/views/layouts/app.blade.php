<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ secure_asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    @yield('styles')

    <!-- Styles -->
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-gray-200 min-h-screen leading-none">

    @if(session('estado'))
    <div class="bg-green-500 p-8 text-center text-white font-bold uppercase">
        {{session('estado')}}
    </div>
    @endif

    <div id="app">
        <nav class="bg-gray-800 shadow-md py-5">
            <div class="container mx-auto md:px-0">
                <div class="flex items-center justify-around">
                    <a class="text-2xl text-white" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>


                    <nav class="flex-auto text-right">

                        <!-- Authentication Links -->
                        @guest

                        <a class="text-white no-underline hover:underline hover:text-green-400 p-3"
                            href="{{ route('login') }}">{{ __('Login') }}</a>

                        @if (Route::has('register'))

                        <a class="text-white no-underline hover:underline hover:text-green-400 p-3"
                            href="{{ route('register') }}">{{ __('Register') }}</a>

                        @endif
                        @else
                        <span class="text-gray-200 text-sm pr-4 hover:text-green-400"><a href=" {{route('vacantes.index')}} ">{{ Auth::user()->name }}</a></span>
|

                        <a href="{{route('notificaciones')}}" class="bg-green-500 rounded-full mr-2 px-3 py-1 font-bold text-sm text-white"
                        > {{Auth::User()->unreadNotifications->count()}} </a>

                        <a class="no-underline hover:underline text-red-400 text-sm p-3" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                        @endguest
                    </nav>
                </div>
            </div>
        </nav>

        <div class="bg-gray-600 barra">
            <nav class="container mx-auto flex flex-col text-center md:flex-row space-x-1">
                @yield('navegacion')
            </nav>
        </div>

        <main class="mt-5 container mx-auto">
            @yield('content')
        </main>
    </div>

    <!-- Boton hacia arriba -->
<a class="ir-arriba"  javascript:void(0) title="Volver arriba">
    <i class="fas fa-chevron-up"></i>
  </a>


    @yield('scripts')

</body>

</html>
