@extends('layout.master')
@section('content')
<center>
    <h1>Edit un etudiant</h1>
    <form action="/etudiant/{{$etudiant->id}}" method="POST">
        @csrf
        @method('PUT')
        <table>
            <tr>
                <td>Nom</td>
                <td><input type="text" name="nom" value="{{$etudiant!= null ? $etudiant->nom : "" }}" placeholder="nom"></td>
            </tr>
            <tr>
                <td>Prenom</td>
                <td><input type="text" name="prenom" value="{{$etudiant!= null ? $etudiant->prenom : "" }}" placeholder="prenom"></td>
            </tr>
            <tr>
                <td>Note</td>
                <td><input type="text" name="note" value="{{$etudiant!= null ? $etudiant->note : "" }}" placeholder="note"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Envoyer"></td>
                <td><input type="reset" value="Annuler"></td>
            </tr>
        </table>
    </form>
</center>
@endsection
