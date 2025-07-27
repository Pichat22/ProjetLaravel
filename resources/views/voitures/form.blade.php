@extends('layouts.app')
@section('content')

<div class="col-4 ms-5" >
<h1>Formulaire d'ajout</h1>

<form action="{{route('voitures.store')}}" method="POST">
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Marque</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="marque" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Modele</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="modele">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Matricule</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name ="matricule">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Prix</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="prix">
  </div>
  
  
  <button type="submit" class="btn btn-primary">Envoyer</button>
</form>
</div>
@endsection