<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\Theme;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    //recuperer les documents dans la bd et les passer a la page documents/index pour qu'elle les affiche
    public function index()
    {
        $documents = Document::all();
        $titre = "Liste des documents";
        return view('documents/index', compact('documents', 'titre'));
    }

    // validation des donnees
    public function create()
    {
        $themes = Theme::all();
        return view('documents/create', compact('themes'));
    }

    public function    store(Request $request)
    {

        $request->validate([
            'titre' => 'required|max:60',
            'description' => 'required|min:5|max:200',
        ]);


        // $s = storage_path('app');
        $data = $request->all();
        $data['chemin'] = $request->chemin->store('cours');;
        //  $data['titre']=""t
        //  dd($s);
        Document::create($data);
        return   redirect()->route('documents.index');
        // $t=new Document(["document"=> "$request->document","niveau"=>$request->niveau]);
        //$t=new Document()
        //        $t->document = $request->document;
        // ..
        // $t->niveau = $request->niveau;
        // $t->save();

    }
    public function show($id)
    {

        $document = Document::find($id);
        $titre = "consultation du document " . $document->document;
        //    dd($document->niveau);
        return view("documents.show", compact('document', 'titre'));
    }
    public function destroy($id)
    {
        $document = Document::find($id);
        $document->delete();
        return redirect()->route('documents.index');
    }
    //affiche une page ayant le form d'edition
    // web.php : routeget =>
    public function edit($id)
    {
        // dd("je suis dans edit".);

        $document = Document::find($id);
        $themes = Theme::all();
        return view("documents.edit", compact('document','themes'));
    }
    //web : route post :documents/upd/id
    public function update(Request $request, $id)
    {
        $document = Document::find($id);
        $document->update($request->all());
        return redirect()->route('documents.index');
    }
}
