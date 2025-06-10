<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold">Liste des actualités</h2>
    </x-slot>

    <div class="py-4">
        <a href="{{ route('actualites.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Nouvelle actualité</a>
    </div>

    @foreach ($actualites as $actu)
        <div class="border p-4 my-2">
            <h3 class="text-lg font-bold">{{ $actu->titre }}</h3>
            <p>{{ Str::limit($actu->contenu, 150) }}</p>
            <div class="mt-2">
                <a href="{{ route('actualites.show', $actu) }}" class="text-blue-600">Voir</a> |
                <a href="{{ route('actualites.edit', $actu) }}" class="text-yellow-600">Modifier</a> |
                <form action="{{ route('actualites.destroy', $actu) }}" method="POST" class="inline">
                    @csrf @method('DELETE')
                    <button type="submit" class="text-red-600" onclick="return confirm('Supprimer ?')">Supprimer</button>
                </form>
            </div>
        </div>
    @endforeach

    {{ $actualites->links() }}
</x-app-layout>
