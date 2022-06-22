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
                                            <td>{{$etudiant->Matricule}}</td>
                                            <td>{{$etudiant->Nom}}</td>
                                            <td>{{$etudiant->Prenom}}</td>
                                            <td>{{$etudiant->Niveau}}</td>
                                            <td>{{$etudiant->Cycle}}</td>
                                            <td>{{$etudiant->Annee}}</td>
                                            
                                            <td>
                                                <a class="btn btn-info" href="{{ route('etudiants.show' , $etudiant) }}">Show</a>
                                                <a class="btn btn-primary" href="{{ route( 'etudiants.edit', $etudiant) }}">Edit</a>
                                            
                                        
                                                <form action="{{route('etudiants.destroy',$etudiant->id)}}" method="POST">
                                                
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
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