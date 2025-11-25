<?php

namespace App\Livewire\Guides;

use Livewire\Component;
use App\Models\Guide;

class SearchGuides extends Component
{
    public $search = '';
    public $filterTheme = 'all';
    public $showModal = false;
    public $selectedGuide = null;

    public function filterByTheme($theme)
    {
        $this->filterTheme = $theme;
    }

    public function showGuideDetails($id)
    {
        $guide = Guide::find($id);

        if ($guide) {
            $this->selectedGuide = $guide->toArray();
            $this->showModal = true;
        }
    }

    public function closeModal()
    {
        $this->showModal = false;
        $this->selectedGuide = null;
    }

    public function render()
    {
        $guides = Guide::query()

            // 🔍 Filtre recherche texte
            ->when($this->search, function ($query) {
                $query->where(function ($q) {
                    $q->where('title', 'like', '%' . $this->search . '%');
                });
            })

            // 🎨 Filtre par thème
            ->when($this->filterTheme !== 'all', function ($query) {
                $query->where('theme', $this->filterTheme);
            })

            ->get();

        return view('livewire.guides.search-guides', [
            'guides' => $guides
        ]);
    }
}
