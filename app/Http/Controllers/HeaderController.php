<?php

namespace App\Http\Controllers;

use App\Models\Headers;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
  
    public function store(Request $request){

        if ($request->isMethod('post')) {

                $request->validate([
                    'header' => 'required',
                    'titre'
                ]);

                $photoPaths = [];

                if($request->hasFile('header')){

                    $photos = $request->file('header');

                //   dd($photos);

                    foreach ($photos as $photo) {
                        $photoPath = $photo->store('public/header');
                        $photoPath = str_replace('public/', '/storage/', $photoPath);
                        $photoPaths[] = $photoPath; 
                    }
                }
              
                //  dd($photoPaths);

                foreach ($photoPaths as $photoPath) {
                    Headers::insert([
                        'header' => $photoPath,
                        'titre' => $request->titre,
                    ]);
                }

             return redirect()->back()->with('flash_message_success','Image ajoutée avec succès');

            }  else {

        return redirect('/admin/headers')->with('flash_message_error','Echec enregistrement!');
        }
    }

  
    public function show(){
        $headers = Headers::all();
        return view('components.index', compact('headers'));
    }

    public function delete($idevent){

        Headers::where(['id' => $idevent])->delete([]);

        return redirect()->back()->with('flash_message_success', 'Image supprimée avec succès!');
    }

    public function edit(Request $request, $idgalerie){

        $headers = Headers::where(['id' => $idgalerie])->first();
        if ($request->isMethod('post')) {
            $request->validate([
                'header' => 'required',
                'titre' => 'required',
            ]);

            $photoPaths = [];

            if($request->hasFile('header')){

                $photos = $request->file('header');

                foreach ($photos as $photo) {
                    $photoPath = $photo->store('public/header');
                    $photoPath = str_replace('public/', '/storage/', $photoPath);
                    $photoPaths[] = $photoPath; 
                }
            }
          
            foreach ($photoPaths as $photoPath) {
                Headers::where(['id' => $idgalerie])->update([
                    'header' => $photoPath,
                    'titre' => $request->description,
                ]);
            }
            return redirect()->back()->with('flash_message_success','Mise a jour éffectué');
        } 

        return redirect('/admin/headers')->with('flash_message_error','Echec! Un problème est survenu.');

    }

    public function details($idgalerie){
        $headers = Headers::where(['id' => $idgalerie])->first();
        $headerss = explode('|', $headers->header);
        return view('components.index', compact('headers','headerss'));
    }
}
