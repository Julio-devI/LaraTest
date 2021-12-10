<?php

namespace App\Http\Livewire\Admin;

use App\Models\Poll;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminAddPollComponent extends Component
{
    use WithFileUploads;

    public $title;
    public $poll_description;
    public $image;
    public $start_date;
    public $end_date;

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'title' => 'required',
            'poll_description' => 'required',
            'image' => 'required|mimes:jpeg,png',
            'start_date' => 'required',
            'end_date' => 'required'
        ]);
    }

    public function createNewPoll()
    {
        $this->validate([
            'title' => 'required',
            'poll_description' => 'required',
            'image' => 'required|mimes:jpeg,png',
            'start_date' => 'required',
            'end_date' => 'required'
        ]);

        $npoll = new Poll();
        $npoll->title = $this->title;
        $npoll->poll_description = $this->poll_description;

        $imageName = Carbon::now()->timestamp . '.' . $this->image->extension();
        $this->image->storeAs('img', $imageName);
        $npoll->image = $imageName;

        $npoll->start_date = $this->start_date;
        $npoll->end_date = $this->end_date;
        $npoll->save();
        session()->flash('message', 'Poll has been saved successfully');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-poll-component')->layout('layouts.base');
    }
}