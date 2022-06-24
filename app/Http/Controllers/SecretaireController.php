<?php

namespace App\Http\Controllers;
Use App\Models\User;
use Illuminate\Http\Request;


class SecretaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $secretaires = User::all();
        $nbrE = User::all()->count();

        return view('secretaires.index', compact('secretaires', 'nbrE'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('secretaires.create');
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
        
        'name'=>'required',
        'email'=>'required|email',
        'role'=>'required',
        'password'=>'required',
        
        
            ]);

           User::create($request->all());


            return redirect()->route('secretaires.index')->with('success','Secretaire enregistree avec succes.');
    }

    /**
     * Display the specified resource.
     *@param \App\Models\Secretaire  $secretaire 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $secretaire)
    {
        return view('secretaires.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $secretaire)
    {
        return view('secretaires.edit',compact('secretaire'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $secretaire)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'role'=>'required',
            'password'=>'required',
            
        ]);

        $secretaire->update($request->all());
        
        return redirect()->route('secretaires.index')->with('success','Secretaire modifie avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $secretaire)
    {
        $secretaire->delete();
        
        return redirect()->route('secretaires.index')
                         ->with('success','Secretaire supprime avec succes');
        }
}
