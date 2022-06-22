@extends('layouts.app')
<link rel="stylesheet" href=" {{asset('css/etudiant.css')}}">
<link rel="stylesheet" href="{{asset('css/styles.css')}}">
@section('content')
<div class="container">
                        <div class="row justify-content-center" >
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-3">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Enregistrer un etudiant</h3></div>
                                    <div class="card-body">

                                    <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('etudiants.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
                                    
    <form action="{{ route('posts.update',$post->id) }}" method="POST">
                                            @csrf

                                            @method('PUT')
                                        <div class="form-floating mb-3">
                                                <input class="form-control etudiant" id="inputMatricule" type="text" placeholder="matricule"name="matricule" value="{{ $etudiant->matricule }}" />
                                                <label for="inputMatricule">Matricule</label>
                                            </div>
                                        
                                            <div class="form-floating mb-3">
                                                <input class="form-control etudiant" id="inputName" type="text" placeholder="nom" name="nom" value="{{ $etudiant->nom }}" />
                                                <label for="inputName">Nom</label>
                                            </div> 
                                            <div class="form-floating mb-3">
                                                <input class="form-control etudiant" id="inputName" type="text" placeholder="prenom"name="prenom" value="{{ $etudiant->prenom }}" />
                                                <label for="inputName">Prenom</label>
                                            </div> 
                                            
                                            <div class="form-floating mb-3">
                                                <input class="form-control etudiant" id="inputNiveau" type="text" placeholder="niveau"name="niveau" value="{{ $etudiant->niveau }}"  />
                                                <label for="inputNiveau">Niveau</label>
                                            </div>  
                                            <div class="form-floating mb-3">
                                                <input class="form-control etudiant" id="inputCycle" type="text" placeholder="cycle"name="cycle" value="{{ $etudiant->cycle }}" />
                                                <label for="inputCycle">Cycle</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control etudiant" id="inputYear" type="text" placeholder="cycle"name="annee" value="{{ $etudiant->annee }}"  />
                                                <label for="inputYear">Annee</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control etudiant" id="inputYear" type="file" placeholder="photo"name="photo" value="{{ $etudiant->photo }}"  />
                                                <label for="inputPicture"></label>
                                            </div>
                                            
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
@endsection
