<?php

namespace App\Http\Livewire\Admin;

use App\Models\Poll;
use Livewire\Component;

class AdminDashboardComponent extends Component
{
    public function deletePoll($id)
    {
        $npoll = Poll::find($id);
        if ($npoll->image) {
            unlink('img/polls' . '/' . $npoll->image);
        }
        $npoll->delete();
        session()->flash('message', 'Poll has been deleted successfully');
    }

    public function render()
    {
        $npolls = Poll::all();
        return view('livewire.admin.admin-dashboard-component', ['npolls' => $npolls])->layout('layouts.base');
    }
}