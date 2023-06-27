<?php

namespace App\Http\Controllers;

use App\Models\Teams;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index(){
        $teams = Teams::all();
        return view('site.about', compact('teams'));
    }

    public function store(Request $request){

        if ($request->isMethod('post')) {

                $request->validate([
                    'photo' => 'required',
                    'nom',
                    'prenoms',
                    'surnom'
                ]);

                if ($request->hasFile('photo')) {
                    $image = $request->photo;
                    $name =  uniqid() . '.' . $image->getClientOriginalExtension();
                    $image->move('assets/teams/', $name);
                }
              

                    Teams::insert([
                        'photo' => $name,
                        'nom' => $request->nom,
                        'prenoms' => $request->prenoms,
                        'surnom' => $request->surnom,
                    ]);
                

             return redirect()->back()->with('flash_message_success','Membre ajoutée avec succès');

            }  else {

        return redirect('/admin/galeries')->with('flash_message_error','Echec enregistrement!');
        }
    }

  
    public function show(){
        $teams = Teams::all();
        return view('teams.index', compact('teams'));
    }

    public function delete($idevent){

        Teams::where(['id' => $idevent])->delete();

        return redirect()->back()->with('flash_message_success', 'Membre supprimée avec succès!');
    }

    public function edit(Request $request, $idgalerie){

        $teams = Teams::where(['id' => $idgalerie])->first();

        if ($request->isMethod('post')) {

            $request->validate([
                'photo',
                'nom',
                'prenoms',
                'surnom'
            ]);

          
            if ($request->hasFile('photo')) {
                $image = $request->photo;
                $title =  uniqid() . '.' . $image->getClientOriginalExtension();
                $image->move('assets/teams/', $title);
            }

           
                Teams::where(['id' => $idgalerie])->update([
                        'photo' => $title,
                        'nom' => $request->nom,
                        'prenoms' => $request->prenoms,
                        'surnom' => $request->surnom,
                ]);

                return redirect()->back()->with('flash_message_success','Mise a jour éffectué');

            } else {

        return redirect('/admin/teams')->with('flash_message_error','Echec! Un problème est survenu.');
    }
  }
}