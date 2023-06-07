<?php

namespace App\Http\Controllers;

use App\Models\Galeries;
use Illuminate\Http\Request;

class GalerieController extends Controller
{
    public function store(Request $request){

        if ($request->isMethod('post')) {

                $request->validate([
                    'image' => 'required',
                    'description'
                ]);

                // dd($request->all());

                $photoPaths = [];

                if($request->hasFile('image')){

                    $photos = $request->file('image');

                //   dd($photos);

                    foreach ($photos as $photo) {
                        $photoPath = $photo->store('public/galerie');
                        $photoPath = str_replace('public/', '/storage/', $photoPath);
                        $photoPaths[] = $photoPath; 
                    }
                }
              
                //  dd($photoPaths);

                foreach ($photoPaths as $photoPath) {
                    Galeries::insert([
                        'image' => $photoPath,
                        'description' => $request->description,
                    ]);
                }

             return redirect()->back()->with('flash_message_success','Galerie ajoutée avec succès');

            }  else {

        return redirect('/admin/galeries')->with('flash_message_error','Echec enregistrement!');
        }
    }

  
    public function show(){
        $galeries = Galeries::all();
        return view('galeries.index', compact('galeries'));
    }

    public function delete($idevent){

        Galeries::where(['id' => $idevent])->delete([]);

        return redirect()->back()->with('flash_message_success', 'Galerie supprimée avec succès!');
    }

    public function edit(Request $request, $idgalerie){

        $galeries = Galeries::where(['id' => $idgalerie])->first();
        if ($request->isMethod('post')) {
            $request->validate([
                'image' => 'required',
                'description' => 'required',
            ]);

            $photoPaths = [];

            if($request->hasFile('image')){

                $photos = $request->file('image');

                foreach ($photos as $photo) {
                    $photoPath = $photo->store('public/galerie');
                    $photoPath = str_replace('public/', '/storage/', $photoPath);
                    $photoPaths[] = $photoPath; 
                }
            }
          
            foreach ($photoPaths as $photoPath) {
                Galeries::where(['id' => $idgalerie])->update([
                    'image' => $photoPath,
                    'description' => $request->description,
                ]);
            }
            return redirect()->back()->with('flash_message_success','Mise a jour éffectué');
        } 

        return redirect('/admin/galeries')->with('flash_message_error','Echec! Un problème est survenu.');

    }

    public function details($idgalerie){
        $galeries = Galeries::where(['id' => $idgalerie])->first();
        $galeriess = explode('|', $galeries->image);
        return view('galeries.index', compact('galeries','galeriess'));
    }
}
