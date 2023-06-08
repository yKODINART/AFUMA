<?php

namespace App\Http\Controllers;

use App\Models\Evenements;
use App\Models\Tournees;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EvenementController extends Controller
{
    public function index(){
        $tournes = Tournees::all();
        $events = DB::table('evenements')->join('tournees','evenements.tournee_id', '=', 'tournees.id')->select('evenements.id as id',
        'evenements.tournee_id as tournee_id',
        'evenements.titre as titre',
        'evenements.pays as pays',
        'evenements.lieu as lieu',
        'evenements.date as date',
        'evenements.mois as mois_event',
        'evenements.annee as annee_event',
        'tournees.nom as nom',
        'tournees.mois as mois_tournee',
        'tournees.debut as debut',
        'tournees.fin as fin',
        'tournees.annee as annee_tournee')->get(); 
        return view('site.event', compact('tournes', 'events'));
    }

    public function store(Request $request){

        if ($request->isMethod('post')) {

                $request->validate([
                    'tournee_id',
                    'titre',
                    'mois',
                    'annee' => 'required |numeric',
                    'lieu',
                    'pays',
                    'date'
                ]);

                $tournee = Tournees::findOrFail($request->tournee_id);
                $moisTournee = $tournee->mois;
                $jourDebutTournee = $tournee->debut;
                $jourFinTournee = $tournee->fin;
                $anneeTournee = $tournee->annee;
        
                $moisEvenement = strtoupper($request->mois);
                $jourEvenement = intval($request->date);
                $anneeEvenement = $request->annee;

                if ($moisEvenement != $moisTournee || $jourEvenement < $jourDebutTournee || $jourEvenement > $jourFinTournee || $anneeEvenement !=  $anneeTournee) {
                    return redirect()->back()->with('flash_message_error', 'La date de l\'événement est invalide pour la tournée sélectionnée.');
                }
            

                Evenements::insert([
                    'tournee_id' => $request->tournee_id,
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
        $evenements = DB::table('evenements')->join('tournees','evenements.tournee_id', '=', 'tournees.id')->select('evenements.id as id',
        'evenements.tournee_id as tournee_id',
        'evenements.titre as titre',
        'evenements.pays as pays',
        'evenements.lieu as lieu',
        'evenements.date as date',
        'evenements.mois as mois_event',
        'evenements.annee as annee_event',
        'tournees.nom as nom',
        'tournees.mois as mois_tournee',
        'tournees.debut as debut',
        'tournees.fin as fin',
        'tournees.annee as annee_tournee')->get(); 
        return view('evenements.index', compact('events', 'tournes', 'evenements'));
    }

    public function delete($idevent){

        Evenements::where(['id' => $idevent])->delete([]);

        return redirect()->back()->with('flash_message_success', 'Evènement supprimée avec succès!');
    }

    public function edit(Request $request, $idevent){

        $events = Evenements::where(['id' => $idevent])->first();
        if ($request->isMethod('post')) {

            $request->validate([
                    'tournee_id',
                    'titre',
                    'mois',
                    'annee' => 'required |numeric',
                    'lieu',
                    'pays',
                    'date'
            ]);

            // $tournee = Tournees::findOrFail($request->tournee_id);
            // $moisTournee = $tournee->mois;
            // $jourDebutTournee = $tournee->debut;
            // $jourFinTournee = $tournee->fin;
            // $anneeTournee = $tournee->annee;
    
            // $moisEvenement = strtoupper($request->mois);
            // $jourEvenement = intval($request->date);
            // $anneeEvenement = $request->annee;

            // if ($moisEvenement != $moisTournee || $jourEvenement < $jourDebutTournee || $jourEvenement > $jourFinTournee || $anneeEvenement !=  $anneeTournee) {
            //     return redirect()->back()->with('flash_message_error', 'La date de l\'événement est invalide pour la tournée sélectionnée.');
            // }

                Evenements::where(['id' => $idevent])->update([
                    'tournee_id' => $request->tournee_id,
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
