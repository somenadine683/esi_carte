@extends('layouts.auth')
@section('content')
<link rel="stylesheet" href="{{asset('css/newstyle.css')}}">
<link rel="stylesheet" href="{{asset('css/etudiant.css')}}">
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    {{-- student card --}}
   {{-- dashboard --}}
   <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card border border-0 shadow p-3 mb-5 bg-body rounded">
                {{-- <div class="card-header t">Dashboard</div> --}}

                <div class="card-body text-center bg-body ">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h3>welcome to your dashboard/<span class="text-primary">student card</span></h3>
                    <h6>This is your dashboard, where you can manage the students, add an admin and more.</h6>
                </div>

            </div>
        </div>
    </div>
    <div class="d-flex">

        <div class="container ">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="card shadow p-3 mb-5 bg-body rounded border-0 rounded-lg mt-5">
                        <div class="card-header bg-secondary text-center">
                            <h5 class="text-white font-weight-light my-0">{{ __('NAZI BONI (ESI) STUDENT CARD') }}</h5>
                        </div>
                        <div class="card-body bg-primary">
                            <div class="d-flex offset  text-light">
                                <div class="img col-3 rounded rounded-circle mt-1 bg-info">
                                    <img src="{{ asset('img/student.png') }}" alt="student" class="img-fluid">
                                </div>
                                <div class="d-block offset-1 mt-3">
                                    <h6>{{ $etudiant->matricule }}</h6>
                                    <h6 class="">{{ $etudiant->nom }}</h6>
                                    <h6>{{ $etudiant->prenom }}</h6>
                                    
                                </div>
                                <div class="d-block offset-1 mt-3">
                                    <h6>{{ $etudiant->niveau }}</h6>
                                    <h6>{{ $etudiant->cycle }}</h6>
                                    <h6>{{ $etudiant->annee }}</h6>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-secondary">

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="card shadow p-3 mb-5 bg-body rounded shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header bg-secondary text-center">
                            <h5 class="text-white font-weight-light my-0">{{ __('NAZI BONI (ESI) STUDENT CARD') }}</h5>
                        </div>
                        <div class="card-body bg-dark">

                            <div class="d-flex offset  text-light">
                                <div class="img col-3 offset-4 rounded rounded-circle mt-1 bg-info">
                                    <img src="{{ asset('img/student.png') }}" alt="student" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-secondary">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="d-flex ml-3">
    <div><a href="{{route('home')}}" class="btn btn-primary">Back</a></div>
    
    <div><a class="btn btn-danger" href="{{ route( 'etudiants.edit', $etudiant) }}">Edit</a></div>
</div>
@endsection
{{-- end of student card --}}