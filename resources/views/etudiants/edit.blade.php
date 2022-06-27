@extends('layouts.app')
<link rel="stylesheet" href=" {{asset('css/etudiant.css')}}">
<link rel="stylesheet" href="{{asset('css/styles.css')}}">
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
@section('content')



<div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-body">
                        <div class="card-header bg-primary">
                            <h3 class="text-center font-weight-light text-light my-1">Mise a jour</h3>
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
                                    
    <form action="{{ route('etudiants.update',$etudiant->id) }}" method="POST">
                                            @csrf

                                            @method('PUT')
                                            <div class="form-group">
                                                <input class="form-control my-2  py-1" id="inputMatricule" type="text" placeholder="matricule"name="matricule" value="{{ $etudiant->matricule }}" />
                                                
                                            </div>
                                        
                                            <div class="form-group">
                                                <input class="form-control my-2  py-1" id="inputName" type="text" placeholder="nom" name="nom" value="{{ $etudiant->nom }}" />
                                                
                                            </div> 
                                            <div class="form-group">
                                                <input class="form-control my-2  py-1" id="inputName" type="text" placeholder="prenom"name="prenom" value="{{ $etudiant->prenom }}" />
                                               
                                            </div> 
                                             
                                            <div class="form-group">
                                                <input class="form-control my-2  py-1" id="inputName" type="email" placeholder="email"name="email" value="{{ $etudiant->email }}" />
                                               
                                            </div> 
                                            
                                            <div class="form-group">
                                                <input class="form-control my-2  py-1" id="inputNiveau" type="text" placeholder="niveau"name="niveau" value="{{ $etudiant->niveau }}"  />
                                               
                                            </div>  
                                            <div class="form-group">
                                                <input class="form-control my-2  py-1" id="inputCycle" type="text" placeholder="cycle"name="cycle" value="{{ $etudiant->cycle }}" />
                                                
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control my-2  py-1" id="inputYear" type="text" placeholder="cycle"name="annee" value="{{ $etudiant->annee }}"  />
                                                
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control my-2  py-1" id="inputYear" type="file" placeholder="photo"name="photo" value="{{ $etudiant->photo }}"  />
                                               
                                            </div>
                                            
                                                <div class="pull-right">
                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                         <a class="btn btn-danger" href="{{ route('etudiants.index') }}"> Back</a>

                                                    </div>
                                                
                                            </div>
                                            </div>
                                        </form>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

