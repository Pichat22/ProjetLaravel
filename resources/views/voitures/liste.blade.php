@extends('layouts.app')
@section('content')
<a href="{{route('voitures.create')}}" class="btn btn-success">Ajouter</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">marque</th>
      <th scope="col">modele</th>
      <th scope="col">matricule</th>
      <th scope="col">prix</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($resultatdatabase as $voiture)
    <tr>
      <th scope="row">{{$voiture->id}}</th>
      <td>{{$voiture->marque}}</td>
      <td>{{$voiture->modele}}</td>
      <td>{{$voiture->matricule}}</td>
      <td>{{$voiture->prix}}</td>
      <td>
        <a href="{{route('voitures.show',$voiture->id)}}">details</a>
        <a href="{{route('voitures.edit',$voiture->id)}}">editer</a>
        <form action="{{route('voitures.destroy',$voiture->id)}}" method="Post">
        @csrf
        @method('delete')
        <button type="submit">Supprimer</button>
        </form>
      </td>
    </tr>
    
    @endforeach
    
  </tbody>
</table>
@endsection