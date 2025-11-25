<x-layouts.app>
    <x-header
        backgroundImage="https://images.pexels.com/photos/7658822/pexels-photo-7658822.jpeg"
        titre="Les Guides de Jardinage"
        paragraphe="Apprenez à cultiver vos propres fruits et légumes avec nos guides détaillés et conseils pratiques."/>

    <div class="max-w-[1200px] my-12 mx-auto py-0 px-6">
        <x-title>Nos Guides de Jardinage</x-title>
        <livewire:guides.search-guides />
    </div>

    <x-footer />
</x-layouts.app>