<?php

namespace App\Livewire\Potager;

use Livewire\Component;
use App\Models\Plant;

class SearchPotager extends Component
{
    public $search = '';
    public $selectedPlant = null;
    public $showModal = false;
    
    public function render()
    {
        $plants = [];
        
        if ($this->search) {
            $plants = Plant::where('name', 'like', '%' . $this->search . '%')
                            ->with('care') // Charger la relation care
                            ->get();
        } else {
            $plants = Plant::with('care')->get(); // Charger la relation care
        }
        
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
}