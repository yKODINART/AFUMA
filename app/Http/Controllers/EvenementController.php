<?php

namespace App\Http\Controllers;

use App\Models\Evenements;
use Illuminate\Http\Request;

class EvenementController extends Controller
{
   

    public function store(Request $request){

        if ($request->isMethod('post')) {

                $request->validate([
                    'titre',
                    'annee' => 'required |numeric',
                    'lieu',
                    'pays',
                    'date'
                ]);

        

                Evenements::insert([
                    'titre' => $request->titre,
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
        return view('evenements.index', compact('events'));
    }

    public function delete($idevent){

        Evenements::where(['id' => $idevent])->delete([]);

        return redirect()->back()->with('flash_message_success', 'Evènement supprimée avec succès!');
    }

    public function edit(Request $request, $idevent){

        $events = Evenements::where(['id' => $idevent])->first();
        if ($request->isMethod('post')) {
            $request->validate([
                    'titre',
                    'annee' => 'required |numeric',
                    'lieu',
                    'pays',
                    'date'
            ]);


                Evenements::where(['id' => $idevent])->update([
                    'titre' => $request->titre,
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
