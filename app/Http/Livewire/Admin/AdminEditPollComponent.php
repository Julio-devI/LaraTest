<?php

namespace App\Http\Livewire\Admin;

use App\Models\Poll;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminEditPollComponent extends Component
{
    use WithFileUploads;

    public $poll_id;
    public $title;
    public $poll_description;
    public $image;
    public $newimage;
    public $start_date;
    public $end_date;

    public function mount($poll_id)
    {
        $npoll = Poll::find($poll_id);
        $this->poll_id = $npoll->id;
        $this->title = $npoll->title;
        $this->poll_description = $npoll->poll_description;
        $this->image = $npoll->image;
        $this->start_date = $npoll->start_date;
        $this->end_date = $npoll->end_date;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'title' => 'required',
            'poll_description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required'
        ]);

        if ($this->newimage) {
            $this->validateOnly($fields, [
                'newimage' => 'required|mimes:jpeg,png'
            ]);
        }
    }

    public function updatePoll()
    {
        $this->validate([
            'title' => 'required',
            'poll_description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required'
        ]);

        if ($this->newimage) {
            $this->validate([
                'newimage' => 'required|mimes:jpeg,png',
            ]);
        }

        $npoll = Poll::find($this->poll_id);
        $npoll->title = $this->title;
        $npoll->poll_description = $this->poll_description;
        $npoll->start_date = $this->start_date;
        $npoll->end_date = $this->end_date;

        if ($this->newimage) {
            $imageName = Carbon::now()->timestamp . '.' . $this->newimage->extension();
            $this->newimage->storeAs('img', $imageName);
            $npoll->image = $imageName;
        }

        $npoll->save();
        session()->flash('message', 'Poll has been updated successfully');
    }

    public function render()
    {
        return view('livewire.admin.admin-edit-poll-component')->layout('layouts.base');
    }
}