<?php

namespace App\Http\Controllers;

use App\Models\Tournees;
use Illuminate\Http\Request;

class TourneController extends Controller
{
    public function store(Request $request){

        if ($request->isMethod('post')) {

           
                $request->validate([
                    'nom',
                    'mois'=> 'required',
                    'debut',
                    'fin',
                    'date'
                ]);

                Tournees::insert([
                    'nom' => $request->nom,
                    'mois' => $request->mois,
                    'debut' => $request->debut,
                    'fin' => $request->fin,
                    'date' => $request->date
                ]);

        return redirect()->back()->with('flash_message_success','Tournée ajoutée avec succès');
            }  else 
        {
        return redirect('/admin/blogs')->with('flash_message_error','Echec enregistrement!');
        }
    }

    public function show(){
        $tournes = Tournees::all();
        return view('tournees.index', compact('tournes'));
    }

    public function delete($idtourne){

        Tournees::where(['id' => $idtourne])->delete([]);

        return redirect()->back()->with('flash_message_success', 'Tournée supprimée avec succès!');
    }

    public function edit(Request $request, $idtourne){

        $tournes = Tournees::where(['id' => $idtourne])->first();
        if ($request->isMethod('post')) {
           
            $request->validate([
                'nom' => 'required',
                'mois'=> 'required',
                'debut'=> 'required',
                'fin'=> 'required'
            ]);
          
                Tournees::where(['id' => $idtourne])->update([
                    'nom' => $request->nom,
                    'mois' => $request->mois,
                    'debut' => $request->debut,
                    'fin' => $request->fin
                ]);

            return redirect()->back()->with('flash_message_success','Mise a jour éffectué');
        } 

        return redirect('/admin/blogs')->with('flash_message_error','Echec! Un problème est survenu.');

    }

}
