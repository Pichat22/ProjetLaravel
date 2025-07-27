@extends('layouts.app')
@section('content')
<p> <strong>marque:</strong> {{$voiture->marque}}</p>
<p> <strong>modele:</strong> {{$voiture->modele}}</p>
<p> <strong>matricule:</strong> {{$voiture->matricule}}</p>
<p> <strong>prix:</strong> {{$voiture->prix}}</p>
@endsection