<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\publication;
use App\user;

class PublicationController extends Controller
{
    public function index()
    {
        $publications = Publication::all();
        return view('publications.index')->with(compact('publications')); //listado
    }

    public function create()
    {
        return view('publications.create'); //formulario de registro    

    }

    public function store(Request $request)
    {
        // registrar la nueva publicacion en la base de datos
        //dd($request->all());
        $publication = new Publication();
        $publication->title = $request->input('title');
        $publication->messaje = $request->input('messaje');
        $publication->messaje = $request->input('image_messaje');
        $publication->save(); // insert

        return redirect('/publications');
    }

    public function edit($id)
    {
        $publication = Publication::find($id);
        return view('publications.edit')->with(compact('publication')); //formulario de registro    

    }

    public function update(Request $request, $id)
    {
        // registrar la nueva publicacion en la base de datos
        //dd($request->all());
        $publication = Publication::find($id);
        $publication->title = $request->input('title');
        $publication->messaje = $request->input('messaje');
        $publication->messaje = $request->input('image_messaje');
        $publication->save(); // update

        return redirect('/publications');
    }

    public function destroy($id)
    {
        $product = Publication::find($id);
        $product->delete(); // delete

        return back();
    }

    //public function profile($id)
   /* public function profile()
    {
       /* $publication = Publication::find($id);
        return view('publications.profile')->with(compact('publication')); //muestra el perfil de la persona    

        {
        $publications = Publication::all();
        return view('profile')->with(compact('publications'));
    }
    }*/

    public function profile()
    {
       /* $publication = Publication::find($id);
        return view('publications.profile')->with(compact('publication')); //muestra el perfil de la persona    */
        $users = User::all();    
        $publications = Publication::all();
        return view('profile')->with(compact('publications', 'users'));
    }
}
