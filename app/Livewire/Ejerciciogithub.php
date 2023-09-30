<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Ejerciciogithub extends Component
{
    public $repos = [];

    public function mount()
    {
        $response = Http::get('https://api.github.com/search/repositories?q=stars:%3E1&sort=stars&order=desc&per_page=10');
        $this->repos = $response->json()['items'];
    }

    public function render()
    {
        return view('livewire.ejerciciogithub');
    }
}
