<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Etudiants=Etudiant::all();
        //var_dump($Etudiants);
        //database
        return view('Etudiant.index',['Etudiant'=>$Etudiants]);
       //api
       //return response()->json($Etudiants);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $etud=new Etudiant();
        $etud->nom=$request->input('nom');
        $etud->prenom=$request->input('prenom');
        $etud->note=$request->input('note');
        $etud->save();
        //data
        return Redirect("/etudiant");
        //api
        //return response()->json($etud);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @ param  \App\Models\Etudiant  $etudiant
     * @ return \Illuminate\Http\Response
     */
    public function edit( $etudiant)
    {
        $E=Etudiant::find($etudiant);
        //$E=Etudiant::findOrFail($etudiant);// avec try catch
        return view('Etudiant.edit',['etudiant'=>$E]);
    }
 /**
     * Show the form for creating a new resource.
     *
     * @ return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Etudiant.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function show($etudiant)
    {
        //data
        return view('Etudiant.show',['etudiant'=>Etudiant::find($etudiant)]);
        //api
        //return response()->json(Etudiant::find($etudiant));
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $etudiant)
    {
        $etud=Etudiant::find($etudiant);
        $etud->nom=$request->input('nom');
        $etud->prenom=$request->input('prenom');
        $etud->note=$request->input('note');
        $etud->save();
        //data
        return Redirect("/etudiant");
        //api
        //return response()->json($etud);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function destroy($etudiant)
    {
        $etud= Etudiant::find($etudiant);
        $etud->delete();
        //data
        return Redirect('/etudiant');
        //api
        //return response()->json($etud);
    }
}
