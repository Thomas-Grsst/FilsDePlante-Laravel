{{-- @props(['name',
        'description',
        'image',
        'type',
        'seasons',
        'plantation',
        'recolte',
        'exposition',
        'arrosage',
        'entretien',
        'conseil',
        'temps' => '3 jours']) --}}


<div>
    <div class="relative mb-4">
        <input
            type="text"
            wire:model.live="search"
            placeholder="Rechercher un légume, fruit ou plante..."
            class="w-full p-4 pl-12 rounded-lg border border-gray-300 focus:ring-2 focus:ring-green-500 focus:border-transparent"
        >
        <div class="absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400">
            <i class="fas fa-search"></i>
        </div>
    </div>

    <!-- Grille avec 3 colonnes -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 p-3">
        @foreach ($plants as $plant)
            <div class="bg-white/40 backdrop-blur-md rounded-2xl shadow-lg overflow-hidden">
                <!-- Image en haut -->
                <div class="relative">
                    <img src="{{ $plant->image }}"
                        alt="{{ $plant->name }}" class="w-full h-48 object-cover">
                    <!-- Badge de saison en haut à droite -->
                    <div class="absolute text-white top-4 right-4 bg-accent backdrop-blur-sm rounded-full px-3 py-1 text-sm font-semibold">
                        {{ is_array($plant->seasons) ? implode(', ', $plant->seasons) : $plant->seasons }}
                    </div>
                </div>
                
                <div class="p-6">
                    <!-- Titre et type -->
                    <h2 class="text-2xl font-bold text-gray-800 mb-2">{{ $plant->name }}</h2>
                    <div class="inline-block bg-green-100 text-dark text-sm font-medium px-3 py-1 rounded-full mb-4">
                        <i class="fas fa-seedling mr-1"></i>
                        {{ $plant->type }}
                    </div>
                    
                    <!-- Description -->
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        {{ $plant->description }}
                    </p>

                    <!-- Informations de culture -->
                    @if($plant->care)
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="p-2 rounded-lg mr-3">
                                <i class="fas fa-calendar-alt "></i>
                            </div>
                            <div>
                                <p class="font-semibold text-gray-800">Plantation</p>
                                <p class="text-gray-600 text-sm">{{ $plant->care->plantation }}</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="p-2 rounded-lg mr-3">
                                <i class="fas fa-hand-holding-heart "></i>
                            </div>
                            <div>
                                <p class="font-semibold text-gray-800">Récolte</p>
                                <p class="text-gray-600 text-sm">{{ $plant->care->recolte }}</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class=" p-2 rounded-lg mr-3">
                                <i class="fas fa-sun "></i>
                            </div>
                            <div>
                                <p class="font-semibold text-gray-800">Exposition</p>
                                <p class="text-gray-600 text-sm">{{ $plant->care->exposition }}</p>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-4 text-center">
                        <p class="text-yellow-700 text-sm">Informations de culture non disponibles</p>
                    </div>
                    @endif
                    
                    <!-- Bouton d'action -->
                    <button
                        wire:click="showPlantDetails({{ $plant->id }})"
                        class="w-full mt-6 bg-secondary hover:bg-primary text-white font-medium py-3 rounded-lg transition duration-200 flex items-center justify-center">
                        <i class="fas fa-book-open mr-2"></i>
                        Voir la fiche complète
                    </button>
                </div>
            </div>
        @endforeach
        
        @if($plants->count() === 0)
        <div class="col-span-full text-center py-8">
            <p class="text-gray-500">Aucune plante trouvée.</p>
        </div>
        @endif
    </div>

    <!-- Modal de détails -->
    @if($showModal && $selectedPlant)
    <div class="fixed inset-0 bg-white/10 backdrop-blur-sm flex items-center justify-center p-4 z-5">
        <div class="bg-white rounded-2xl shadow-xl max-w-2xl w-full max-h-[80vh] overflow-y-auto">
            <!-- En-tête du modal -->
            <div class="relative">
                <img src="{{ $selectedPlant->image }}"
                    alt="{{ $selectedPlant->name }}"
                    class="w-full h-64 object-cover rounded-t-2xl">
                <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm rounded-full px-3 py-1 text-sm font-medium">
                    <i class="fas fa-leaf text-green-600 mr-1"></i>
                    {{ is_array($selectedPlant->seasons) ? implode(', ', $selectedPlant->seasons) : $selectedPlant->seasons }}
                </div>
                <button 
                    wire:click="closeModal"
                    class="absolute top-4 left-4 bg-white/90 hover:bg-white rounded-full p-2 transition duration-200"
                >
                    <i class="fas fa-times text-gray-600"></i>
                </button>
            </div>

            <!-- Contenu du modal -->
            <div class="p-6">
                <!-- Titre et type -->
                <h1 class="text-3xl font-bold text-gray-800 mb-2">{{ $selectedPlant->name }}</h1>
                <div class="inline-block bg-green-100 text-green-800 text-sm font-medium px-3 py-1 rounded-full mb-6">
                    <i class="fas fa-seedling mr-1"></i>
                    {{ $selectedPlant->type }}
                </div>

                <!-- Description -->
                <p class="text-gray-700 mb-8 leading-relaxed text-lg">
                    {{ $selectedPlant->description }}
                </p>

                <!-- Section Conseils de Culture -->
                <h2 class="text-2xl font-bold text-gray-800 mb-6 border-b pb-2">Conseils de Culture</h2>

                @if($selectedPlant->care)
                <div class="space-y-6">
                    <!-- Période de plantation -->
                    <div class="flex items-start">
                        <div class="bg-blue-100 p-3 rounded-lg mr-4">
                            <i class="fas fa-calendar-alt text-blue-600 text-xl"></i>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-semibold text-gray-800 text-lg mb-1">Période de plantation</h3>
                            <p class="text-gray-600">{{ $selectedPlant->care->plantation }}</p>
                        </div>
                    </div>

                    <!-- Exposition -->
                    <div class="flex items-start">
                        <div class="bg-yellow-100 p-3 rounded-lg mr-4">
                            <i class="fas fa-sun text-yellow-600 text-xl"></i>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-semibold text-gray-800 text-lg mb-1">Exposition</h3>
                            <p class="text-gray-600">{{ $selectedPlant->care->exposition }}</p>
                        </div>
                    </div>

                    <!-- Entretien -->
                    @if($selectedPlant->care->entretien)
                    <div class="flex items-start">
                        <div class="bg-green-100 p-3 rounded-lg mr-4">
                            <i class="fas fa-tools text-green-600 text-xl"></i>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-semibold text-gray-800 text-lg mb-1">Entretien</h3>
                            <p class="text-gray-600">{{ $selectedPlant->care->entretien }}</p>
                        </div>
                    </div>
                    @endif

                    <!-- Période de récolte -->
                    <div class="flex items-start">
                        <div class="bg-orange-100 p-3 rounded-lg mr-4">
                            <i class="fas fa-hand-holding-heart text-orange-600 text-xl"></i>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-semibold text-gray-800 text-lg mb-1">Période de récolte</h3>
                            <p class="text-gray-600">{{ $selectedPlant->care->recolte }}</p>
                        </div>
                    </div>

                    <!-- Arrosage -->
                    @if($selectedPlant->care->arrosage)
                    <div class="flex items-start">
                        <div class="bg-teal-100 p-3 rounded-lg mr-4">
                            <i class="fas fa-tint text-teal-600 text-xl"></i>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-semibold text-gray-800 text-lg mb-1">Arrosage</h3>
                            <p class="text-gray-600">{{ $selectedPlant->care->arrosage }}</p>
                        </div>
                    </div>
                    @endif

                    <!-- Conseil du jardinier -->
                    @if($selectedPlant->care->conseil)
                    <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 mt-6">
                        <div class="flex items-start">
                            <div class="bg-blue-100 p-2 rounded-lg mr-3">
                                <i class="fas fa-lightbulb text-blue-600"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-blue-800 text-lg mb-1">Conseil du jardinier</h3>
                                <p class="text-blue-700">{{ $selectedPlant->care->conseil }}</p>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
                @else
                <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-6 text-center">
                    <p class="text-yellow-700">Informations de culture non disponibles pour cette plante.</p>
                </div>
                @endif

                <!-- Bouton de sauvegarde -->
                <div class="mt-8 pt-6 border-t">
                    <button class="w-full bg-green-600 hover:bg-green-700 text-white font-medium py-4 rounded-lg transition duration-200 flex items-center justify-center text-lg">
                        <i class="fas fa-bookmark mr-2"></i>
                        Sauvegarder cette plante
                    </button>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>