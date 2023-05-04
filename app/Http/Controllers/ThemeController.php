<?php

namespace App\Http\Controllers;

use App\Models\Theme;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
public function index()
{

    return view('themes/index');
}


    public function create()
    {
        return view('themes.create');
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
