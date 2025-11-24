<x-layouts.app>
    <x-header
        backgroundImage="https://images.pexels.com/photos/7658822/pexels-photo-7658822.jpeg"
        titre="Mon Potager"
        paragraphe="Apprenez à cultiver vos propres fruits et légumes avec nos guides détaillés et conseils pratiques."/>

    <div class="max-w-[1200px] my-12 mx-auto py-0 px-6">
        <x-title>Cultiver son Potager</x-title>

        <div>
        <!-- Barre de recherche et filtres -->
            <livewire:potager.search-potager />
        </div>
    </div>
    <x-footer />
</x-layouts.app>