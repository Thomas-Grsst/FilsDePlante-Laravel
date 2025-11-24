<?php

namespace App\Livewire\Vegetaux;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class SearchVegetaux extends Component
{
    public $searchTerm = '';
    public $title = '';
    public $extract = '';
    public $imageUrl = '';
    public $loading = false;
    public $error = '';
    public $pageType = '';

    public function search()
    {
        $this->reset(['title', 'extract', 'imageUrl', 'error', 'pageType']);
        
        if (empty($this->searchTerm)) {
            $this->error = 'Veuillez entrer un terme de recherche';
            return;
        }

        $this->loading = true;

        try {
            $response = Http::withHeaders([
                'User-Agent' => 'PlantSearchApp/1.0 (Laravel; ' . config('app.url') . ') Contact: votre-email@example.com'
            ])
            ->withOptions([
                'verify' => config('app.env') === 'production',
            ])
            ->timeout(10)
            ->get("https://fr.wikipedia.org/api/rest_v1/page/summary/" . urlencode($this->searchTerm));

            if ($response->successful()) {
                $data = $response->json();
                
                // Vérifier le type de page
                $this->pageType = $data['type'] ?? '';
                
                // Récupérer les données même pour les pages de désambiguïsation
                $this->title = $data['title'] ?? '';
                $this->extract = $data['extract'] ?? '';
                
                // Gérer l'image
                if (isset($data['thumbnail']['source'])) {
                    $this->imageUrl = $data['thumbnail']['source'];
                } elseif (isset($data['originalimage']['source'])) {
                    $this->imageUrl = $data['originalimage']['source'];
                }
                
                // Si aucune donnée n'est trouvée
                if (empty($this->title) && empty($this->extract)) {
                    $this->error = 'Aucune information trouvée pour ce terme';
                }
                
            } elseif ($response->status() === 404) {
                $this->error = 'Article non trouvé sur Wikipedia';
            } elseif ($response->status() === 403) {
                $this->error = 'Accès refusé par Wikipedia. Veuillez réessayer.';
            } else {
                $this->error = 'Erreur lors de la récupération : Code ' . $response->status();
            }
        } catch (\Exception $e) {
            $this->error = 'Erreur lors de la récupération des données : ' . $e->getMessage();
        } finally {
            $this->loading = false;
        }
    }

    public function render()
    {
        return view('livewire.vegetaux.search-vegetaux');
    }
}