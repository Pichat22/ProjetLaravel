@extends('layouts.app')
@section('content')
<div class="col-4 ms-5" >
<h1>Formulaire d'ajout</h1>

<form action="{{route('chauffeurs.store')}}" method="POST">
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Date</label>
    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="date" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Chauffeur</label>
    <select class="form-select" aria-label="Default select example" name="chauffeurid">
  <option selected>Selectionnez un chauffeur</option>
  @foreach($chauffeurs as $chauffeur)
  <option value="{{$chauffeur->id}}">{{$chauffeur->nom}}</option>
  @endforeach
</select>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Voiture</label>
    <select class="form-select" aria-label="Default select example" name="voitureid">
  <option selected>Selectionnez une voiture</option>
  @foreach($voitures as $voiture)
  <option value="{{$voiture->id}}">{{$voiture->matricule}}</option>
  @endforeach
 
</select>
  </div>
  
  <button type="submit" class="btn btn-primary">Envoyer</button>
</form>
</div>
@endsection