<main class="container mx-auto px-4 py-10 max-w-6xl">

    <!-- Filtres -->
    <div class="flex flex-wrap justify-center gap-3 mb-10">

        <button 
            wire:click="filterByTheme('all')"
            class="px-4 py-2 rounded-full transition
            {{ $filterTheme === 'all'
                ? 'bg-primary text-white shadow'
                : 'border border-gray-300 text-gray-700 hover:bg-gray-100' }}"
        >Tous les guides</button>

        <button 
            wire:click="filterByTheme('debutant')"
            class="px-4 py-2 rounded-full transition
            {{ $filterTheme === 'debutant'
                ? 'bg-primary text-white shadow'
                : 'border border-gray-300 text-gray-700 hover:bg-gray-100' }}"
        >Débutants</button>

        <button 
            wire:click="filterByTheme('technique')"
            class="px-4 py-2 rounded-full transition
            {{ $filterTheme === 'technique'
                ? 'bg-primary text-white shadow'
                : 'border border-gray-300 text-gray-700 hover:bg-gray-100' }}"
        >Techniques</button>

        <button 
            wire:click="filterByTheme('saison')"
            class="px-4 py-2 rounded-full transition
            {{ $filterTheme === 'saison'
                ? 'bg-primary text-white shadow'
                : 'border border-gray-300 text-gray-700 hover:bg-gray-100' }}"
        >Par saison</button>

        <button 
            wire:click="filterByTheme('bio')"
            class="px-4 py-2 rounded-full transition
            {{ $filterTheme === 'bio'
                ? 'bg-primary text-white shadow'
                : 'border border-gray-300 text-gray-700 hover:bg-gray-100' }}"
        >Jardinage bio</button>

    </div>

    <!-- Grille -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

        @forelse ($guides as $guide)

        <div class="bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden">
            <img src="{{ $guide->image }}" class="w-full h-48 object-cover">

            <div class="p-4 space-y-2">
                <span class="inline-block text-xs uppercase bg-gray-200 px-2 py-1 rounded">
                    {{ $guide->theme }}
                </span>

                <h3 class="font-bold text-lg">{{ $guide->title }}</h3>
                <p class="text-gray-600 line-clamp-3">{{ $guide->description }}</p>

                <button 
                    wire:click="showGuideDetails({{ $guide->id }})"
                    class="inline-block bg-accent text-white px-4 py-2 rounded-lg hover:bg-amber-600 transition"
                >
                    Lire le guide
                </button>
            </div>
        </div>

        @empty
            <p class="text-center col-span-full text-gray-600">Aucun guide trouvé.</p>
        @endforelse

    </div>

    <!-- Modal -->
    @if($showModal && $selectedGuide)
    <div class="fixed inset-0 bg-black bg-opacity-60 flex items-center justify-center z-50 px-4">

        <div class="bg-white max-w-3xl w-full rounded-xl shadow-xl p-6 overflow-y-auto max-h-[90vh] relative">

            <button 
                wire:click="closeModal"
                class="absolute top-3 right-3 text-gray-600 text-2xl hover:text-black"
            >×</button>

            <x-title class="text-2xl font-bold">{{ $selectedGuide['title'] }}</x-title>

            <img src="{{ $selectedGuide['image'] }}" class="w-full h-64 object-cover rounded-md mb-4">

            

            <div class="prose max-w-none">
                @foreach($selectedGuide['sections'] as $section)
                    <h3  class="font-bold text-1xl text-dark mt-3">{{ $section['title'] }}</h3>
                    <p>{{ $section['text'] }}</p>
                @endforeach
            </div>

            <div class="prose max-w-none mt-6 bg-gray-100 rounded-md p-4">
                <h3 class="text-1xl font-semibold">{{ $selectedGuide['tips']['title'] }}</h3>
                <ul>
                    @foreach($selectedGuide['tips']['items'] as $item)
                        <li>- {{ $item }}</li>
                    @endforeach
                </ul>
            </div>

            <button 
                wire:click="closeModal"
                class="w-full mt-6 bg-accent text-white py-3 rounded-lg hover:bg-amber-600 transition"
            >Fermer</button>
        </div>

    </div>
    @endif

    <!-- Newsletter -->
    <section class="bg-gray-100 rounded-xl mt-16 p-10 text-center">
        <h2 class="text-2xl font-bold mb-2">Restez informé</h2>
        <p class="text-gray-700 mb-6">Inscrivez-vous à notre newsletter pour recevoir nos nouveaux guides.</p>

        <form class="flex flex-col sm:flex-row gap-4 justify-center max-w-xl mx-auto">
            <input
                type="email"
                placeholder="Votre adresse email"
                class="px-4 py-3 rounded-lg bg-white border border-gray-300 w-full"
            >
            <button class="px-6 py-3 bg-accent text-white rounded-lg hover:bg-amber-600 transition">
                S'inscrire
            </button>
        </form>
    </section>

</main>
