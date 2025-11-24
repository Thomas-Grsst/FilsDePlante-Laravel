<x-layouts.app>
    <x-header
        backgroundImage="https://wallpaperaccess.com/full/1276644.jpg"
        titre="Explorer les Végétaux"
        paragraphe="Découvrez notre base de données complète de plus de 14 000 espèces végétales classées par catégories."
        text_button="Découvrir nos végétaux"/>

    <div class="max-w-[1200px] my-12 mx-auto py-0 px-6">
        <x-title>Catalogue des Végétaux</x-title>

        <livewire:vegetaux.search-vegetaux />
    </div>
    <x-footer />
</x-layouts.app>