<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $blogs = Blogs::all();
        return view('site.blog', compact('blogs'));
    }

    public function detail($iddetail){
        $blogs = Blogs::where(['id' => $iddetail])->first();
        $blog_recents = Blogs::orderBy('created_at', 'desc')->get(); 
        return view('site.blog_detail', compact('blogs', 'blog_recents'));
    }

    public function store(Request $request){

        if ($request->isMethod('post')) {

           
                $request->validate([
                    'image' => 'required',
                    'description'=> 'required',
                    'date'=> 'required',
                    'titre'=> 'required',
                    'sous_titre'=> 'required',
                ]);

                $fileData = [];

              

                if($request->hasFile('image')){
                    $image = $request->file('image');
                    $imagePath = $image->store('public/blog');
                    $imagePath = str_replace('public/', '/storage/', $imagePath);
                    $fileData[] = $imagePath;
                }

                // $date_text = date('d F Y', strtotime(str_replace('/', '-', $request->date)));

                Blogs::insert([
                    'image' => $imagePath,
                    'description' => $request->description,
                    'date' => $request->date,
                    'titre' => $request->titre,
                    'sous_titre' => $request->sous_titre,
                ]);

        return redirect()->back()->with('flash_message_success','Blogs ajoutée avec succès');
            }  else 
        {
        return redirect('/admin/blogs')->with('flash_message_error','Echec enregistrement!');
        }
    }


    public function show(){
        $blogs = Blogs::all();
        return view('blogs.index', compact('blogs'));
    }

    public function delete($idblog){

        Blogs::where(['id' => $idblog])->delete([]);

        return redirect()->back()->with('flash_message_success', 'Blog supprimée avec succès!');
    }

    public function edit(Request $request, $idblog){

        $blogs = Blogs::where(['id' => $idblog])->first();
        if ($request->isMethod('post')) {

            $request->validate([
                'image' => 'required',
                'description'=> 'required',
                'date'=> 'required',
                'titre'=> 'required',
                'sous_titre'=> 'required',
            ]);

           
           
            if($request->hasFile('image')){
                $image = $request->file('image');
                $imagePath = $image->store('public/blog');
                $imagePath = str_replace('public/', '/storage/', $imagePath);
               
            }

          
                Blogs::where(['id' => $idblog])->update([
                    'image' => $imagePath,
                    'description' => $request->description,
                    'date' => $request->date,
                    'titre' => $request->titre,
                    'sous_titre' => $request->sous_titre,
                ]);

            return redirect()->back()->with('flash_message_success','Mise a jour éffectué');
        } 

        return redirect('/admin/blogs')->with('flash_message_error','Echec! Un problème est survenu.');

    }

    public function details($idblog){
        $blogs = Blogs::where(['id' => $idblog])->first();
        return view('blogs.index', compact('blogs'));
    }
}
