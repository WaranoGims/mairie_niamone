<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold">{{ $actualite->titre }}</h2>
    </x-slot>

    <div class="mt-4">
        <p>{{ $actualite->contenu }}</p>
    </div>
</x-app-layout>
