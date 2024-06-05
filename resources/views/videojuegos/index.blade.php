<x-app-layout>

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    @if (session()->has('error'))
        <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50" role="alert">
            <span class="font-medium">Error</span> {{ session()->get('error') }}
        </div>
    @endif

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <h1 class="m-4">Titulo</h1>

        @foreach ($videojuegos as $videojuego)
            <div class="border-b mb-4 pb-4">
                <h2 class="font-medium text-gray-900">{{ $videojuego->titulo }}</h2>

                <div class="mt-2">
                    <a href="{{ route('videojuegos.edit', $videojuego) }}" class="text-blue-600 hover:underline">Editar</a>
                    <a href="{{ route('videojuegos.show', $videojuego) }}" class="text-blue-600 hover:underline">Mostrar</a>
                    <form method="POST" action="{{ route('videojuegos.destroy', $videojuego) }}" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-blue-600 hover:underline">Borrar</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>

    <div class="flex justify-center mt-4 ml-10">
        <x-primary-button><a href="{{ route('videojuegos.create') }}">Insertar nuevo videojuego</a></x-primary-button>
    </div>

</x-app-layout>
