@extends('layouts.app')
@section('content')

<div class="col-4 ms-5" >
<h1>Formulaire de modification</h1>

<form action="{{route('voitures.update',$voiture->id)}}" method="POST">
    @csrf
    @method('put')
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Marque</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="marque" value="{{$voiture->marque}}" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Modele</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="modele" value="{{$voiture->modele}}">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Matricule</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name ="matricule" value="{{$voiture->matricule}}">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Prix</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="prix" value="{{$voiture->prix}}">
  </div>
  
  
  <button type="submit" class="btn btn-primary">Modifier</button>
</form>
</div>
@endsection