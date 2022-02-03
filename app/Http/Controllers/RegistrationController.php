<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class RegistrationController extends Controller
{
    public function store(Request $request)
    {   

        
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        
        $user = User::create(request(['name', 'email', 'password']));
        print_r($user);
        
        auth()->login($user);
        
        return redirect()->to('/api/processos');
    }
}
