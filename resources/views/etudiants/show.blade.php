@extends('layouts.auth')
@section('content')
<link rel="stylesheet" href="{{asset('css/newstyle.css')}}">
<link rel="stylesheet" href="{{asset('css/etudiant.css')}}">
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    {{-- student card --}}
   {{-- dashboard --}}
   <div class="container mt-4 " >
    <div class="row justify-content-center" >
        <div class="col-md-11">
            <div class="card border border-0 shadow p-3 mb-5 bg-body rounded" id="carte">
                {{-- <div class="card-header t">Dashboard</div> --}}

                <div class="card-body text-center bg-body col-11">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                        
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1>Universite Nazi Boni/ESI</h1>
                </div>
                
            </div>
        </div>
    </div>
    <div class="mt-10  offset-1">
                <a href="{{route('home')}}" class="btn btn-primary m-1">Back</a>
    
                <a class="btn btn-danger m-1" href="{{ route( 'etudiants.edit', $etudiant) }}">Edit</a>

                <div id="btn-pdf" class="btn btn-warning m-1 " style="cursor:pointer">
                <i class="fa-solid fa-file-pdf" >IMPRIMER</i>
            </div>
        </div>

    <div class="d-flex" id="carte-main" style="width:950px;">

        
                    <div class="card shadow p-3 mb-5 bg-body rounded border-0 rounded-lg mt-5  offset-1">
                        <div class="card-header bg-secondary text-center">
                            <h5 class="text-white font-weight-light my-0">{{ __('Carte Etudiant') }}</h5>
                        </div>
                        <div class="card-body bg-primary">
                            <div class="d-flex offset  text-light">
                                <div class="img col-3 rounded rounded-circle mt-1 bg-info">
                                    <img src="{{ asset('img/'. $etudiant->photo) }}" alt="student" class="img-fluid">
                                </div>
                                <div class="d-block offset-1 mt-3">
                                    <h6>{{ $etudiant->matricule }}</h6>
                                    <h6 class="">{{ $etudiant->nom }}</h6>
                                    <h6>{{ $etudiant->prenom }}</h6>
                                    <h6>{{ $etudiant->email }}</h6>
                                    
                                </div>
                                <div class="d-block offset-1 mt-3">
                                    <h6>{{ $etudiant->niveau }}</h6>
                                    <h6>{{ $etudiant->cycle }}</h6>
                                    <h6>{{ $etudiant->annee }}</h6>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-secondary">
                           <h5 style="color:white;margin-left:100px;">{{ __('Université Nazi Boni/ESI') }}</h5>
                        </div>
             
</div>

    










<script src="{{asset('js/carte.js')}}"></script>
@endsection

{{-- end of student card --}}