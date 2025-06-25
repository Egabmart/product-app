<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-g">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Product App')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans antialiased">
    <nav class="bg-white shadow-md">
        <div class="container mx-auto px-6 py-3">
            <div class="flex items-center justify-between">
                <a href="{{ url('/') }}" class="text-xl font-semibold text-gray-700">ProductApp</a>
                <div>
                    <a href="{{ route('categories.index') }}" class="text-gray-700 hover:text-blue-600 px-3 py-2">@lang('categories.title_list')</a>
                    <a href="{{ route('products.index') }}" class="text-gray-700 hover:text-blue-600 px-3 py-2">@lang('products.title_list')</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="container mx-auto px-6 py-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-4">
            @yield('header')
        </h1>

        {{-- Bloque para mostrar mensajes de éxito --}}
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

         {{-- Bloque para mostrar errores de validación --}}
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                <strong class="font-bold">@lang('common.are_you_sure')</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <div class="bg-white shadow-md rounded-lg p-6">
            @yield('content')
        </div>
    </main>
</body>
</html>