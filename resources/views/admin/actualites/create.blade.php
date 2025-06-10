<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold">Créer une actualité</h2>
    </x-slot>

    <form action="{{ route('actualites.store') }}" method="POST" class="mt-4">
        @csrf
        <div>
            <label>Titre</label>
            <input type="text" name="titre" class="w-full border rounded px-3 py-2" required>
        </div>

        <div class="mt-4">
            <label>Contenu</label>
            <textarea name="contenu" rows="5" class="w-full border rounded px-3 py-2" required></textarea>
        </div>

        <button type="submit" class="mt-4 bg-green-500 text-white px-4 py-2 rounded">Publier</button>
    </form>
</x-app-layout>
