<?php

namespace App\Controllers;

use App\Core\App;

class UsersController 
{
    public function index()
    {
        $users = App::get('database')->selectAll('customers');
        return view('users', [
            'users' => $users
        ]);

    }

    public function store()
    {
        // Insert the user associated with the request

        App::get('database')->insert('users', [
            'name' => $_POST['name']
        ]);
        
        return redirect('users');
    }
}