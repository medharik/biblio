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

// validation des donnees
    public function create()
    {
        return view('themes/create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'theme' => 'required|max:30|unique:themes',
            'niveau' => 'required|max:10',
            'photo'=>'image'
        ]);
$data=$request->all();
$data['photo']=$request->photo->store('images');
// dd($data['photo']);
    Theme::create($data);
      return   redirect()->route('youssef');
        // $t=new Theme(["theme"=> "$request->theme","niveau"=>$request->niveau]);
        //$t=new Theme()
        //        $t->theme = $request->theme;
// ..
        // $t->niveau = $request->niveau;
        // $t->save();

    }
    public function show($id)
    {

       $theme= Theme::find($id);
       $titre= "consultation du theme ".$theme->theme;
    //    dd($theme->niveau);
    return view("themes.show",compact('theme','titre'));


    }
   public function destroy($id)
   {
    $theme=Theme::find($id);
    $theme->delete();
return redirect()->route('youssef');
   }
   //affiche une page ayant le form d'edition
   // web.php : routeget =>
   public function edit($id)
   {
    // dd("je suis dans edit".);

    $theme=Theme::find($id);
    return view("themes.edit",compact('theme'));
   }
   //web : route post :themes/upd/id
   public function update(Request $request,$id)
   {
    $request->validate([
        'theme' => 'required|max:30|unique:themes,theme,'.$id,
        'niveau' => 'required|max:10',
        'photo'=>'mimes:jpg,bmp,png,jpeg|size:2048'
    ]);
    $theme=Theme::find($id);
   //$r= Theme::where('theme','=',$request->theme);
//    isset <=> !null
//empty <=> 0 ,[],null
    $data=$request->all();


    if($request->has('photo')){
        // $chemin=public_path('storage/'.$theme->photo);
        // $url=asset('storage/'.$theme->photo);
        // dd($chemin,$url)
;        unlink(public_path('storage/'.$theme->photo));
        $data['photo']=$request->photo->store("images");
    }else{
        unset($data['photo']);
    }
    $theme->update($data);
    return redirect()->route('youssef');

   }

}
