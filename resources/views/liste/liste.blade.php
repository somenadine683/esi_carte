@extends('layouts.app')

@section('content')

<div class="container-fluid px-4">
                        
                        
                        <div class="card mb-4">
                            <div class="card-body">
                            <h1 class="mt-4">Liste des etudiants</h1>  
                                
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                            </div>
                            <div class="card-body">
<table id="datatablesSimple">
                                    <thead class="c">
                                        <tr>
                                            <th class="text-center">Matricule</th>
                                            <th class="text-center">Nom</th>
                                            <th class="text-center">Prenom</th>
                                            <th class="text-center">Niveau</th>
                                            <th class="text-center">Cycle</th>
                                            <th class="text-center">Annee</th>
                                            <th class="text-center">Photo</th>
                                            <th class="text-center">Action</th>
                                            
                                        </tr>
                                    </thead>
                                    
                                    <tbody class="d">
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><a href=""><button type="button" class="btn bg-primary  ">Modifier</button></a>
                                            <a href=""><button type="button" class="btn bg-danger ">Supprimer</button></a></td>
                                        </tr>
                                        

                                        
                                    </tbody>
                                </table>
@endsection