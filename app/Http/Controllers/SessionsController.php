<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;


class SessionsController extends Controller
{
    public function store(Request $request)
    {
        if (auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'O email está incorreto, tente novamente'
            ]);
        }
        
        return redirect()->to('/api/processos');
    }
    
    public function destroy()
    {
        auth()->logout();
        
        return redirect()->to('/processos');
    }
}
