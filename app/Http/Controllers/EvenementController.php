<?php

namespace App\Http\Controllers;

use App\Models\Evenements;
use App\Models\Tournees;
use Illuminate\Http\Request;

class EvenementController extends Controller
{
   

    public function store(Request $request){

        if ($request->isMethod('post')) {

                $request->validate([
                    'tournee',
                    'titre',
                    'mois',
                    'annee' => 'required |numeric',
                    'lieu',
                    'pays',
                    'date'
                ]);

        

                Evenements::insert([
                    'tournee' => $request->tournee,
                    'titre' => $request->titre,
                    'mois' => $request->mois,
                    'annee' => $request->annee,
                    'date' => $request->date,
                    'pays' => $request->pays,
                    'lieu' => $request->lieu,
                   
                ]);

        return redirect()->back()->with('flash_message_success','Evènement ajoutée avec succès');
            }  else 
        {
        return redirect('/admin/evenements')->with('flash_message_error','Echec enregistrement!');
        }
    }


    public function show(){
        $events = Evenements::all();
        $tournes = Tournees::all();
        return view('evenements.index', compact('events', 'tournes'));
    }

    public function delete($idevent){

        Evenements::where(['id' => $idevent])->delete([]);

        return redirect()->back()->with('flash_message_success', 'Evènement supprimée avec succès!');
    }

    public function edit(Request $request, $idevent){

        $events = Evenements::where(['id' => $idevent])->first();
        if ($request->isMethod('post')) {

            $request->validate([
                    'tournee',
                    'titre',
                    'mois',
                    'annee' => 'required |numeric',
                    'lieu',
                    'pays',
                    'date'
            ]);


                Evenements::where(['id' => $idevent])->update([
                    'tournee' => $request->tournee,
                    'titre' => $request->titre,
                    'mois' => $request->mois,
                    'annee' => $request->annee,
                    'date' => $request->date,
                    'pays' => $request->pays,
                    'lieu' => $request->lieu,
                ]);

            return redirect()->back()->with('flash_message_success','Mise a jour éffectué');
        } 

        return redirect('/admin/evenements')->with('flash_message_error','Echec! Un problème est survenu.');

    }

    public function details($idevent){
        $events = Evenements::where(['id' => $idevent])->first();
        return view('evenements.index', compact('events'));
    }
}
