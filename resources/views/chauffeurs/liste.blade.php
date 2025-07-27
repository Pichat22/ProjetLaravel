@extends('layouts.app')
@section('content')
<a href="{{route('chauffeurs.create')}}" class="btn btn-success">Ajouter</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">nom</th>
      <th scope="col">prenom</th>
      <th scope="col">adresse</th>
      <th scope="col">type_permis</th>
      <th scope="col">telephone</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($resultatdatabase as $chauffeur )
    <tr>
      <th scope="row">{{$chauffeur->id}}</th>
      <td>{{$chauffeur->nom}}</td>
      <td>{{$chauffeur->prenom}}</td>
      <td>{{$chauffeur->adresse}}</td>
      <td>{{$chauffeur->type_permis}}</td>
      <td>{{$chauffeur->telephone}}</td>
    </tr>
    
    @endforeach
    
  </tbody>

</table>
@endsection