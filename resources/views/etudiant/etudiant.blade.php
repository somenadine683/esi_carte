@extends('layouts.app')


@section('content')
<div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-3">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Enregistrer un etudiant</h3></div>
                                    <div class="card-body">
                                        <form>
                                        <div class="form-floating mb-3">
                                                <input class="form-control etudiant" id="inputMatricule" type="text" placeholder="matricule"name="matricule"/>
                                                <label for="inputMatricule">Matricule</label>
                                            </div>
                                        
                                            <div class="form-floating mb-3">
                                                <input class="form-control etudiant" id="inputName" type="text" placeholder="nom" name="nom"/>
                                                <label for="inputName">Nom</label>
                                            </div> 
                                            <div class="form-floating mb-3">
                                                <input class="form-control etudiant" id="inputName" type="text" placeholder="prenom"name="prenom" />
                                                <label for="inputName">Prenom</label>
                                            </div> 
                                            
                                            <div class="form-floating mb-3">
                                                <input class="form-control etudiant" id="inputNiveau" type="text" placeholder="niveau"name="niveau" />
                                                <label for="inputNiveau">Niveau</label>
                                            </div>  
                                            <div class="form-floating mb-3">
                                                <input class="form-control etudiant" id="inputCycle" type="text" placeholder="cycle"name="cycle" />
                                                <label for="inputCycle">Cycle</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control etudiant" id="inputYear" type="text" placeholder="cycle"name="annee" />
                                                <label for="inputYear">Annee</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control etudiant" id="inputYear" type="file" placeholder="photo"name="photo" />
                                                <label for="inputPicture"></label>
                                            </div>
                                            
                                            <div class="mt-4 mb-0">
                                            <a href=""><button type="button" class="btn  w-30">Enregistrer</button></a>
                                            <a href=""> <button type="button" class="btn  w-45">Lister</button></a>
                                            </div>
                                        </form>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
@endsection
