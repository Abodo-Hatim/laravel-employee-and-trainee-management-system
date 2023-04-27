@extends('layouts.app')
@section('title' , 'App Management Stagiaires Page')
@section('content')
<table class="table table-hover table-responsive w-100 my-2" style="margin-left : -70px;">
    <thead class="bg-info">
        <th>#</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>filiere</th>
        <th>Téléphone</th>
        <th class=" text-center">Operation</th>
    </thead>
    <tbody>
    @foreach ($stagiaires as $stagiaire)
        <tr class="bg-light">
            <td>{{ $stagiaire->id }}</td>
            <td>{{ $stagiaire->nom }}</td>
            <td>{{ $stagiaire->prenom }}</td>
            <td>{{ $stagiaire->filiere }}</td>
            <td>{{ $stagiaire->tele }}</td>
            <td class="text-center">
                <a href="{{ route('stagiaires.show' , $stagiaire->id) }}" class="btn btn-primary">Détails</a>
                <a href="{{ route('stagiaires.edit' , $stagiaire->id) }}" class="btn btn-success">Modifier</a>
                <form action="{{ route('stagiaires.destroy' , $stagiaire->id) }}" method="post" class=" d-inline">
                    {{csrf_field()}}
                    @method('DELETE')
                    <input type="submit" value="Supprimer" class="btn btn-danger">
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
