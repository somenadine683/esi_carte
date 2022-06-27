<?php

namespace App\Http\Controllers;
Use App\Models\Etudiant;
use Illuminate\Http\Request;
Use App\Mail\TestMail;
Use App\Mail\EtudiantMarkdownMail;

use Illuminate\Support\Facades\Mail;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etudiants = Etudiant::all();
        $nbrE = Etudiant::all()->count();

        return view('etudiants.index', compact('etudiants', 'nbrE'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('etudiants.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
        'matricule'=>'required',
        'nom'=>'required',
        'prenom'=>'required',
        'email'=>'required|email',
        'niveau'=>'required',
        'cycle'=>'required',
        'annee'=>'required',
        'photo'=>'required',
            ]);

            Etudiant::create($request->all());


            return redirect()->route('etudiants.index')->with('success','Student created successfuly.');
    }

    /**
     * Display the specified resource.
     *@param \App\Models\Etudiant  $etudiant 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Etudiant $etudiant)
    {
        return view('etudiants.show',compact('etudiant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Etudiant $etudiant)
    {
        return view('etudiants.edit',compact('etudiant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Etudiant $etudiant)
    {
        $request->validate([
            'matricule'=>'required',
            'nom'=>'required',
            'prenom'=>'required',
            'niveau'=>'required',
            'cycle'=>'required',
            'annee'=>'required',
            'photo'=>'required',
        ]);

        $etudiant->update($request->all());
        
        return redirect()->route('etudiants.index')->with('success','Student updated successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Etudiant $etudiant)
    {
        $etudiant->delete();
        
        return redirect()->route('etudiants.index')
                         ->with('success','student deleted successfuly');
        }

    public function bar() {
    
  

    return view('test');
    }
    
    public function send (Request $request){
        Mail::to($request->email)->send(new EtudiantMarkdownMail());
        return back()->with('success', 'Mail envoye !');
    }

        
}
