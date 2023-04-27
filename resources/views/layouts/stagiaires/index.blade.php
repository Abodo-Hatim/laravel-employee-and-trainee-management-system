@extends('layouts.app')
@section('title' , 'App Management Stagiaires Page')
@section('content')


<div class="container">
    <h1>Les Stagiaires Dans Cette Service </h1>
    <ul class="nav col-12 col-md-auto mb-2 justify-content-end mb-md-0 mx-5 my-2">
        <li><a href="{{ route('stagiaires.create')}}" class="nav-link px-2 btn btn-success text-white me-2">Ajouter Stagiaire</a></li>
        <li>
            <form action=" {{ route('delete-all-stagiaires') }} " method="POST">
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
        <th>filiere</th>
        <th>Téléphone</th>
        <th class=" text-center">Operation</th>
    </tr>
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
</table>
<div style="margin-right: 5rem;">
{{$stagiaires->links()}}
</div>
@endsection
