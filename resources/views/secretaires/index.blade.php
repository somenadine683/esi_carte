@extends('layouts.app')
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{ asset('css/etudiant.css') }} ">
<link rel="stylesheet" href="{{asset('css/styles.css')}}">
@section('content')

<div class="container-fluid px-4">
                        
                        
                        <div class="card mb-4">
                            <div class="card-body">
                            <h1 class="mt-4">Listes des secretaires</h1>  
                                
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
                                            
                                            <th class="text-center">name</th>
                                            <th class="text-center">email</th>
                                            
                                            <th class="text-center">action</th>
                                            
                                            
                                            
                                        </tr>
                                    </thead>
                                    
                                    <tbody class="d">


                                        @if($nbrE == 0) 
                                            <p style="color:white;"> Aucune secretaire enregistrée </p>
                                        
                                        @else 

                                        
                                        @foreach ($secretaires as $secretaire)
                                        @if($secretaire->role !="directeur")
                                        <tr>
                                            
                                            <td class="my-0">{{$secretaire->name}}</td>
                                            <td>{{$secretaire->email}}</td>
                                            
                                            </td>
                            <td class="border border-0 d-flex">
                                <form action="{{route('secretaires.destroy',$secretaire->id)}}" method="POST" onsubmit="return cnf()">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>

                                <a class="" href="{{ route( 'secretaires.edit', $secretaire) }}">
                                    <button class="btn btn-primary mx-2" data-toggle="tooltip"
                                        data-placement="top">Edit</button>
                                        </a>
                            </td>
                                            
                                         
                                        </tr>
                                        @endif
                                        @endforeach
                                        
                                        @endif
                                    </tbody>
                                    
                                </table>
                                <div>
                                        <a class="btn btn-primary" href="{{route('secretaires.create')}}">Enregistrer une secretaire </a>
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



