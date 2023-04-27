@extends('layouts.app')
@section('title' , "Details Employe $employe->nom $employe->prenom")
@section('content')

    <div class="container">
        <ul class="nav col-12 col-md-auto mb-2 justify-content-end mb-md-0 mx-5 my-2">
            <li><a href="{{ route('employes.create')}}" class="nav-link px-2 btn btn-success text-white me-2">Ajouter Employes</a></li>
            <li>
                <form action=" {{ route('delete-all-employes') }} " method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit"class="nav-link px-2 btn btn-danger text-white me-2"><i class="bi bi-trash"></i> DELETE ALL</button>
                </form>
            </li>
        </ul>
        <h1>Détails De l'employee {{$employe->nom}} {{$employe->prenom}}</h1>
    </div>


    <div class="card text-bg-info mb-3 my-3" style="max-width: 45rem;">
    <div class="card-header h3">Id De L'employe : #{{$employe->id}}</div>
    <div class="card-body">
        <h5 class="card-title"> Nom & Prenom : {{$employe->nom}} {{$employe->prenom}}</h5>
        <p class="card-text h5">Matricule de l'employée : {{$employe->matricule}}</p>
        <p class="card-text h5">Departement : {{$employe->departement}}</p>
        <p class="card-text h5">Date De Recrutement : {{$employe->date_recrutement}}</p>
        <p class="card-text h5">Téléphone : {{$employe->tele}}</p>
        <p class="card-text h5">Adresse : {{$employe->adresse}}</p>
        <p class="card-text h5">Ville : {{$employe->ville}}</p>
    </div>
    <div class="card-footer d-flex justify-content-center">
        <a href="{{ route('employes.edit' , $employe->id) }}" class="btn btn-success mx-2">Modifier</a>
        <form action="{{ route('employes.destroy' , $employe->id) }}" method="post" class=" d-inline">
            @csrf
            @method('DELETE')
            <input type="submit" value="Supprimer" class="btn btn-danger mx-2">
        </form>
    </div>
    </div>
@endsection
