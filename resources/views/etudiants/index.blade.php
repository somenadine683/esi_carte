@extends('layouts.app')
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{ asset('css/etudiant.css') }} ">
<link rel="stylesheet" href="{{asset('css/styles.css')}}">
@section('content')

<div class="container-fluid px-4">
                        
                        
                        <div class="card mb-4">
                            <div class="card-body">
                            <h1 class="mt-4">Liste des etudiants</h1>  
                                
                            </div>
                        </div>

                        @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{$message}}</p>

                        </div>
                        @endif
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                            </div>
                            <div class="card-body">
                            <table id="datatablesSimple" class="table table-striped">
                                    <thead class="d">
                                        <tr>
                                            <th class="text-center">Matricule</th>
                                            <th class="text-center">Nom</th>
                                            <th class="text-center">Prenom</th>
                                            <th class="text-center">Email</th>
                                            <th class="text-center">Niveau</th>
                                            <th class="text-center">Cycle</th>
                                            <th class="text-center">Annee</th>
                                            
                                            <th class="text-center">Action</th>
                                            
                                        </tr>
                                    </thead>
                                    
                                    <tbody class="d">


                                        @if($nbrE == 0) 
                                            <p style="color:white;"> Aucun etudiant enregistré </p>
                                        
                                        @else 

                                        
                                        @foreach ($etudiants as $etudiant)
                                        <tr>
                                            <td>{{$etudiant->matricule}}</td>
                                            <td>{{$etudiant->nom}}</td>
                                            <td>{{$etudiant->prenom}}</td>
                                            <td>{{$etudiant->email}}</td>
                                            <td>{{$etudiant->niveau}}</td>
                                            <td>{{$etudiant->cycle}}</td>
                                            <td>{{$etudiant->annee}}</td>
                                            
                                            <td class="d-flex">
                                            <div class="my-auto">
                                                    
                                                    <form action="{{route('emails.test' , $etudiant)}}" method="get">
                                                        <input type="hidden" name="email" value="{{$etudiant->email}}" >
                                                        <button type="submit" name="submit" class="btn btn-info mb-0" name="submit" style="border:none; background:#f5f5f5;"><i class="fa fa-envelope" aria-hidden="true"></i></button>

                                                    </form>
                                                    
                                                    
                                                </div>
                                                <a class="btn btn-info" href="{{ route('etudiants.show' , $etudiant) }}">Show</a>
                                                @if(Auth::user()->role == "directeur")
                                                <a class="btn btn-primary lien" href="{{ route( 'etudiants.edit', $etudiant) }}">Edit</a>
                                            
                                                
                                                <form action="{{route('etudiants.destroy',$etudiant->id)}}" method="POST" onsubmit="return cnf()">
                                                
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                                
                                                @endif
                                                
                                          </td>
                                        </tr>
                                        @endforeach
                                        
                                        @endif
                                    </tbody>
                                    
                                </table>
                                <div>
                                        <a class="btn btn-primary" href="{{route('etudiants.create')}}">Enregistrer un etudiant</a>
                                </div>
@endsection

<script>
    function cnf(){
        let ret= confirm("Voulez vous reellement supprimer cette table?")
        if (ret){
            return true;
      }
        return false;
    }
</script>

