<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function store()
    {

       $data = $this->validate(request(), [
                'name' => 'required',
                 'phone' => 'required'
            ]);

        auth()->user()->contacts()->create($data);

        // Contact::create([
        //     'user_id' => auth()->user()->id,
        //     'name' => request('name'),
        //     'phone' => request('phone')
        // ]);
    }
}
