<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminAddPollComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-add-poll-component')->layout('layouts.base');
    }
}