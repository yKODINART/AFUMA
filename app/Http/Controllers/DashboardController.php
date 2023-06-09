<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\Evenements;
use App\Models\Galeries;
use App\Models\Tournees;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

        $blogs = Blogs::all()->count();
        $events = Evenements::all()->count();
        $galeries = Galeries::all()->count();
        $tournes = Tournees::all()->count();
        $users = User::all()->count();

        $eventss = Evenements::all();

        $evenements = Evenements::orderBy("created_at", 'DESC')->get();
        
        return view('home', compact('blogs', 'events', 'galeries', 'users', 'evenements', 'eventss', 'tournes'));
    }

    public function logout(Request $request)
    {
        $id = session('id');
        if ($id != null) {
            // Journaux::create([
            //     'action' => "Déconnexion de la plateforme",
            //     'user_id' => $id,
            // ]);
        }
        $locale = app()->getLocale();
      //  ContractsSessionSession::flush();
        return redirect('/admin/afuma')->with('flash_message_success', 'Deconnexion Réussie ');
    }

    
}
