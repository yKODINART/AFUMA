<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthentificationController extends Controller
{
    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->input();
            if (User::where(['email' => $data['email']])->first()) {
                $currentAdmin = User::where(['email' => $data['email']])->first();
                if (Hash::check($data['password'], $currentAdmin->password)) {
                    
                session(['id' => $currentAdmin->id,
                        'role' => $currentAdmin->role,
                        'email' => $currentAdmin->email]); 

                  
                     
                   return redirect('/admin/dashboard')->with('flash_message_success', 'Connecté : '.$currentAdmin->name);;

                } else {
                    return redirect()->back()->with('flash_message_error', 'Votre mot de passe est invalide');
                }
            } else {
                return redirect()->back()->with('flash_message_error', 'Email invalide! Veuillez réessayer');
            }
        }
        return view('welcome');
    }

    public function index(){
        return view('index');
    }
}
