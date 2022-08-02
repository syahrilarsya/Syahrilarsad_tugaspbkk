<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category as ModelsCategory;
use Livewire\WithPagination;

class Category extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {   
        return view('livewire.category', [
            'category' => ModelsCategory::latest()->paginate(3),
        ]);
    }
}
