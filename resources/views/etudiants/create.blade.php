@extends('layouts.app')
<link rel="stylesheet" href=" {{asset('css/etudiant.css')}}">
<link rel="stylesheet" href="{{asset('css/styles.css')}}">
@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-body">
                        <div class="card-header bg-primary">
                            <h3 class="text-center font-weight-light text-light my-1">Add a new student</h3>
                                </div>

                                    @if($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{$error}}</li>
                                                @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                    
                                        <form action="{{route('etudiants.store')}}" method="POST">
                                            @csrf
                                        <div class="form-group">
                                                <input class="form-control my-2  py-1" id="inputMatricule" type="text" placeholder="matricule"name="matricule"/>
                                            </div>
                                        
                                            <div class="form-group">
                                                <input class="form-control my-2  py-1" id="inputName" type="text" placeholder="nom" name="nom"/>
                                            </div> 
                                            <div class="form-group">
                                                <input class="form-control my-2  py-1" id="inputName" type="text" placeholder="prenom"name="prenom" />
                                            </div> 
                                            
                                            <div class="form-group">
                                                <input class="form-control my-2  py-1" id="inputNiveau" type="text" placeholder="niveau"name="niveau" />
                                            </div>  
                                            <div class="form-group">
                                                <input class="form-control my-2  py-1" id="inputCycle" type="text" placeholder="cycle"name="cycle" />
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control my-2  py-1" id="inputYear" type="text" placeholder="annee"name="annee" />
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control my-2  py-1" id="inputYear" type="file" placeholder="photo"name="photo" />
                                                <label for="inputPicture"></label>
                                            </div>
                                            
                                                <button type="submit" class="btn btn-primary">Submit</button>
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


