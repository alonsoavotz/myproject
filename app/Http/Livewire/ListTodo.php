<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ListTodo extends Component
{
    public $task;
    public $tasks = [];

    protected $rules = [
        'task' => 'required|min:3',
    ];

    public function addTask()
    {
       $this->validate();

       $this->tasks[] = $this->task;
       $this->task = "";

       session()->flash('message', 'Se agrego la tarea correctamente.');
    }

    public function render()
    {
        return view('livewire.list-todo');
    }
}
