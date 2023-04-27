@extends('layouts.app')
@section('title' , "Modifier un Stagiaire $stagiaire->nom")
@section('content')


<div class="container">
    <ul class="nav col-12 col-md-auto mb-2 justify-content-end mb-md-0 mx-5 my-2">
        <li><a href="{{ route('stagiaires.create')}}" class="nav-link px-2 btn btn-success text-white me-2">Ajouter Stagiaires</a></li>
        <li>
            <form action=" {{ route('delete-all-stagiaires') }} " method="POST">
                @csrf
                @method('DELETE')
                <button type="submit"class="nav-link px-2 btn btn-danger text-white me-2"><i class="bi bi-trash"></i> DELETE ALL</button>
            </form>
        </li>
    </ul>
</div>


<div style="margin-left: -100px; margin-right : 50px ;" >
    <form action="{{ route('stagiaires.update' , $stagiaire->id) }}" method="post">
    {{csrf_field()}}
    @method('PUT')
    <div class="row my-3">
            <div class="col-6">
                <label for="nom" class=" form-label">Nom</label>
                <input type="text" name="nom" id="nom" class=" form-control" value="{{$stagiaire->nom}}">
            </div>
            <div class="col-6">
                <label for="prenom" class=" form-label">Prenom</label>
                <input type="text" name="prenom" id="prenom" class=" form-control" value="{{$stagiaire->prenom}}">
            </div>
        </div>
        <div class="row my-3">
            <div class="col-6">
                <label for="filiere" class=" form-label">Filiere</label>
                <input type="text" name="filiere" id="filiere" class=" form-control" value="{{$stagiaire->filiere}}">
            </div>
            <div class="col-6">
                <label for="tele" class=" form-label">Téléphone</label>
                <input type="text" name="tele" id="tele" class=" form-control" value="{{$stagiaire->tele}}">
            </div>
        </div>
        <div class="row my-3">
            <div class="col-6">
                <label for="adresse" class=" form-label">Adresse</label>
                <input type="text" name="adresse" id="adresse" class=" form-control" value="{{$stagiaire->adresse}}">
            </div>
            <div class="col-6">
                <label for="ville" class=" form-label">Ville</label>
                <input type="text" name="ville" id="ville" class=" form-control" value="{{$stagiaire->ville}}"">
            </div>
        </div>
        <div class="row my-3">
            <!-- <button type="submit" class="btn btn-success">Modifier</button> -->
            <input type="submit" value="Modifier le Stagiaire" class="btn btn-success">
        </div>
    </form>
</div>
@endsection
