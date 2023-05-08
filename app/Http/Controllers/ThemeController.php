<?php

namespace App\Http\Controllers;

use App\Models\Theme;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    //recuperer les themes dans la bd et les passer a la page themes/index pour qu'elle les affiche
public function index()
{
$themes=Theme::all();
$titre="Liste des themes" ;
   return view('themes/index',compact('themes','titre'));
}


    public function create()
    {
        return view('themes/create');
    }

    public function store(Request $request)
    {

        Theme::create($request->all());
      return   redirect()->route('youssef');
        // $t=new Theme(["theme"=> "$request->theme","niveau"=>$request->niveau]);
        //$t=new Theme()
        //        $t->theme = $request->theme;

        // $t->niveau = $request->niveau;
        // $t->save();

    }
}
