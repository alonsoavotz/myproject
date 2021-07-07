<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required|min:3',
        ]);
        
        $task = [
            "id" => request('id'),
            "name" => request('name')
        ];

       
      
        return $task;
    }
}
