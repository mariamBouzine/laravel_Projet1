@extends('layout.master')
@section('content')
<center>
    <h1>la liste des etudiants</h1>
    <table>
        <caption>Etudiant Information</caption>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Note</th>
                <th colspan="3"><a href="etudiant/create"> >> ajouter</a></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Etudiant as $item)
                <tr>
                    <td>{{$item["id"]}}</td>
                    <td>{{$item["nom"]}}</td>
                    <td>{{$item["prenom"]}}</td>
                    <td>{{$item["note"]}}</td>
                    <td><a href="etudiant/{{$item["id"]}}/edit">edit</a></td>
                    <td><a href="etudiant/{{$item["id"]}}">show</a></td>
                    <td>
                        <form action="etudiant/{{$item["id"]}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</center>
@endsection
