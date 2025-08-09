@extends('layouts.app')
@section('content')
<div class="col-4 ms-5" >
<h1>Formulaire d'ajout</h1>

<form action="{{route('chauffeurs.store')}}" method="POST">
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nom</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nom" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Prenom</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="prenom">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Adresse</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name ="adresse">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Type_permis</label>
  
    <select class="form-select" aria-label="Default select example" name="typeid">
  <option selected>Selectionnez un type</option>
  @foreach($types as $typepermis)
  <option value="{{$typepermis->id}}">{{$typepermis->nom}}</option>
  @endforeach 
</select>
    </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Telephone</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="telephone">
  </div>
  
  
  <button type="submit" class="btn btn-primary">Envoyer</button>
</form>
</div>
@endsection