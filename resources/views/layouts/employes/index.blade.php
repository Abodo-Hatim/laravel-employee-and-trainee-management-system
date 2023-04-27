@extends('layouts.app')
@section('title' , 'App Management Employes Page')
@section('content')

<div class="container">
    <h1>Les S'employés Dans Cette Service </h1>
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
</div>

    <table class="table table-hover table-responsive w-100 my-2" style="margin-left : -70px;">
        <tr class=" bg-info">
            <th>#</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>departement</th>
            <th>Téléphone</th>
            <th class=" text-center">Operation</th>
        </tr>
        @foreach ($employes as $employe)
            <tr class="bg-light">
                <td>{{$employe->id}}</td>
                <td>{{$employe->nom}}</td>
                <td>{{$employe->prenom}}</td>
                <td>{{$employe->departement}}</td>
                <td>{{$employe->tele}}</td>
                <td class=" text-center">
                    <a href="{{ route('employes.show' , $employe->id) }}" class="btn btn-primary">Détails</a>
                    <a href="{{ route('employes.edit' , $employe->id) }}" class="btn btn-success">Modifier</a>
                    <form action="{{ route('employes.destroy' , $employe->id) }}" method="post" class=" d-inline">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Supprimer" class="btn btn-danger">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <div style="margin-right: 5rem;">
        {{$employes->links()}}
    </div>
@endsection
