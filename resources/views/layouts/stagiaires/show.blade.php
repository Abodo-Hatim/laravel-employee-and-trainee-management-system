@extends('layouts.app')
@section('title' , "Details Stagiaire $stagiaire->nom $stagiaire->prenom ")
@section('content')
    <div class="card text-bg-info mb-3 my-3" style="max-width: 40rem;">
    <div class="card-header h3">Id De Stagiaire : # {{$stagiaire->id}}</div>
    <div class="card-body">
        <h5 class="card-title">Nom & Prenom : {{$stagiaire->nom}} {{$stagiaire->prenom}}</h5>
        <p class="card-text h5">Filiere : {{$stagiaire->filiere}}</p>
        <p class="card-text h5">Téléphone : {{$stagiaire->tele}}</p>
        <p class="card-text h5">Adresse : {{$stagiaire->adresse}}</p>
        <p class="card-text h5">Ville : {{$stagiaire->ville}}</p>
    </div>
    <div class="card-footer d-flex justify-content-center">
        <a href="{{ route('stagiaires.edit' , $stagiaire->id) }}" class="btn btn-success mx-2">Modifier</a>
        <form action="{{ route('stagiaires.destroy' , $stagiaire->id) }}" method="post" class=" d-inline">
            @csrf
            @method('DELETE')
            <input type="submit" value="Supprimer" class="btn btn-danger mx-2">
        </form>
    </div>
    </div>
    </div>
@endsection
