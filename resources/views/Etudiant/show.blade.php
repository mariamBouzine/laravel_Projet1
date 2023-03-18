@extends('layout.master')
@section('content')
<div class="show">
    <h1>Information sur un etudiant</h1>
    <ul>
        <li><b>ID : </b>{{$etudiant->id}}</li>
        <li><b>Nom : </b>{{$etudiant->nom}}</li>
        <li><b>Prenom : </b>{{$etudiant->prenom}}</li>
        <li><b>Note : </b>{{$etudiant->note}}</li>
    </ul>
</div>
@endsection
