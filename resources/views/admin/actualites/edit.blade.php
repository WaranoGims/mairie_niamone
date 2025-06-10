<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold">Modifier l’actualité</h2>
    </x-slot>

    <form action="{{ route('actualites.update', $actualite) }}" method="POST" class="mt-4">
        @csrf @method('PUT')
        <div>
            <label>Titre</label>
            <input type="text" name="titre" value="{{ $actualite->titre }}" class="w-full border rounded px-3 py-2" required>
        </div>

        <div class="mt-4">
            <label>Contenu</label>
            <textarea name="contenu" rows="5" class="w-full border rounded px-3 py-2" required>{{ $actualite->contenu }}</textarea>
        </div>

        <button type="submit" class="mt-4 bg-yellow-500 text-white px-4 py-2 rounded">Mettre à jour</button>
    </form>
</x-app-layout>
