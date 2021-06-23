<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function store()
    {
        $data = request()->all();
        
        User::create($data);
      
    }
}
