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

    @foreach ($posesiones as $posesion)
        <h2>{{$posesion}}</h2>
    @endforeach

    <livewire:tengo />
</x-app-layout>
