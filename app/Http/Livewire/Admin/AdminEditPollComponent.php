<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminEditPollComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-edit-poll-component')->layout('layouts.base');
    }
}