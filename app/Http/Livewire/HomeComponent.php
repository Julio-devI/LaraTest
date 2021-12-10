<?php

namespace App\Http\Livewire;

use App\Models\Poll;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $npolls = Poll::all();
        return view('livewire.home-component', ['npolls' => $npolls])->layout('layouts.base');
    }
}