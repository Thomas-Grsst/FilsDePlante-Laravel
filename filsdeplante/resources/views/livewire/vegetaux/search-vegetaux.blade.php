<div class="max-w-4xl mx-auto p-6">
    <div class="bg-white rounded-lg shadow-lg p-6">
        
        
        {{-- Formulaire de recherche --}}
        <div class="mb-6">
            <div class="flex gap-2">
                <input
                    type="text"
                    wire:model="searchTerm"
                    wire:keydown.enter="search"
                    placeholder="Entrez un terme (ex: Rose, Paris, Chat...)"
                    class="flex-1 px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent"
                >
                <button
                    wire:click="search"
                    wire:loading.attr="disabled"
                    class="px-6 py-2 bg-primary text-white rounded-lg hover:bg-dark transition disabled:opacity-50 disabled:cursor-not-allowed"
                >
                    <span wire:loading.remove wire:target="search">Rechercher</span>
                    <span wire:loading wire:target="search">Chargement...</span>
                </button>
            </div>
            
            {{-- Message d'erreur --}}
            @if($error)
                <div class="mt-3 p-3 bg-red-100 border border-red-400 text-red-700 rounded">
                    {{ $error }}
                </div>
            @endif
        </div>

        {{-- Indicateur de chargement --}}
        <div wire:loading wire:target="search" class="text-center py-8">
            <div class="inline-block animate-spin rounded-full h-12 w-12 border-b-2 border-primary"></div>
            <p class="mt-2 text-gray-600">Recherche en cours...</p>
        </div>

        {{-- Résultats --}}
        @if($title && !$loading)
            <div class="border-t pt-6">


                {{-- Titre --}}
                <h3 class="text-2xl font-bold mb-4 text-gray-800">
                    {{ $title }}
                </h3>

                <div class="grid md:grid-cols-3 gap-6">
                    {{-- Image --}}
                    @if($imageUrl)
                        <div class="md:col-span-1">
                            <img 
                                src="{{ $imageUrl }}"
                                alt="{{ $title }}"
                                class="w-full rounded-lg shadow-md object-cover"
                            >
                        </div>
                    @endif

                    {{-- Extrait --}}
                    @if($extract)
                        <div class="md:col-span-2">
                            <div class="prose max-w-none">
                                <p class="text-gray-700 leading-relaxed text-justify">
                                    {{ $extract }}
                                </p>
                            </div>
                            
                            
                        </div>
                    @endif
                </div>

                {{-- Lien vers Wikipedia --}}
                <div class="mt-6 pt-4 border-t">
                    <a
                        href="https://fr.wikipedia.org/wiki/{{ urlencode($title) }}"
                        target="_blank"
                        class="inline-flex items-center gap-2 text-primary hover:text-dark font-medium"
                    >
                        <span>Voir l'article complet sur Wikipedia</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                        </svg>
                    </a>
                </div>
            </div>
        @endif
    </div>
</div>