@extends('layout.master')
@section('content')
<center>
    <h1>Ajouter un etudiant</h1>
    <form action="/etudiant" method="POST">
        @csrf
        <table>
            <tr>
                <td>Nom</td>
                <td><input type="text" name="nom" placeholder="nom"></td>
            </tr>
            <tr>
                <td>Prenom</td>
                <td><input type="text" name="prenom" placeholder="prenom"></td>
            </tr>
            <tr>
                <td>Note</td>
                <td><input type="text" name="note" placeholder="note"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Envoyer"></td>
                <td><input type="reset" value="Annuler"></td>
            </tr>
        </table>
    </form>
</center>
@endsection
