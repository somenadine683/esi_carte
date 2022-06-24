@extends('layouts.app')
<link rel="stylesheet" href=" {{asset('css/etudiant.css')}}">
<link rel="stylesheet" href="{{asset('css/styles.css')}}">
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
@section('content')
<div class="container">
                        <div class="row justify-content-center" >
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-3">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Enregistrer une secretaire</h3></div>
                                    <div class="card-body">

                                    @if($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{$error}}</li>
                                                @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                    
                                        <form action="{{route('secretaires.store')}}" method="POST">
                                            @csrf


                                        
                                        
                                            <div class="form-floating mb-3">
                                                <input class="form-control etudiant" id="inputName" type="text" placeholder="nom" name="name"/>
                                                <label for="inputName">Nom</label>
                                            </div> 
                                            <div class="form-floating mb-3">
                                                <input class="form-control etudiant" id="inputName" type="text" placeholder="email"name="email" />
                                                <label for="inputName">Email</label>
                                            </div> 
                                            <div class="form-floating mb-3">
                                                
                                                <select class="form-control etudiant" id="inputName" type="text" name="role">
                                                        <option selected>role</option>
                                                        <option value="1">Secretaire</option>
                                                        </select>
                                                <label for="inputName">Role</label>
                                            </div> 
                                            <div class="form-floating mb-3">
                                                <input class="form-control etudiant" id="inputNiveau" type="password" placeholder="niveau"name="password" />
                                                <label for="inputNiveau">Password</label>
                                            </div>  
                                            <div class="form-floating mb-3">
                                                <input class="form-control etudiant" id="inputCycle" type="password" placeholder="confirm"name="confirm" />
                                                <label for="inputCycle">Confirm_password</label>
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
