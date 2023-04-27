@extends('layouts.app')
@section('title' , 'App Management Employes Page')
@section('content')
<table class="table table-hover table-responsive w-100 my-2" style="margin-left : -70px;">
    <thead class="bg-info">
        <th>#</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>departement</th>
        <th>Téléphone</th>
        <th class=" text-center">Operation</th>
    </thead>
    <tbody>
        @foreach($employes as $employe)
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
    </tbody>
</table>
@endsection
