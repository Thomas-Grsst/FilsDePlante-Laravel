<?php

namespace App\Livewire\Potager;

use Livewire\Component;
use App\Models\Plant;

class SearchPotager extends Component
{
    public $search = '';
    public $filterType = '';
    public $filterSeason = '';
    public $selectedPlant = null;
    public $showModal = false;
    
    public function render()
    {
        $plantsQuery = Plant::with('care');
        
        // Recherche par nom
        if ($this->search) {
            $plantsQuery->where('name', 'like', '%' . $this->search . '%');
        }
        
        // Filtre par type
        if ($this->filterType) {
            $plantsQuery->where('type', $this->filterType);
        }
        
        // Filtre par saison
        if ($this->filterSeason) {
            $plantsQuery->whereJsonContains('seasons', $this->filterSeason);
        }
        
        $plants = $plantsQuery->get();
        
        return view('livewire.potager.search-potager', [
            'plants' => $plants,
        ]);
    }

    public function showPlantDetails($plantId)
    {
        $this->selectedPlant = Plant::with('care')->find($plantId);
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->showModal = false;
        $this->selectedPlant = null;
    }

    public function resetFilters()
    {
        $this->reset(['filterType', 'filterSeason', 'search']);
    }
}