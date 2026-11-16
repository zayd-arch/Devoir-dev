@extends('layout')
@section('content')

<h3> Liste des étudiants </h3>

<a class="btn btn-success mb-3" href="{{ route('students.create') }}"> Ajouter un étudiant </a>

<div class="table-wrapper">

<table class="fl-table">

<thead>
    <tr>
        <th>Id</th>
        <th>Nom</th>
        <th>E-mail</th>
        <th>Téléphone</th>
        <th>Section</th>
        <th>Image</th>
        <th>Afficher</th>
        <th>Modifier</th>
        <th>Supprimer</th>
    </tr>
</thead>

<tbody>
    @foreach($students as $student)
    <tr>
        <td>{{$student->id}}</td>
        <td>{{$student->name}}</td>
        <td>{{$student->email}}</td>
        <td>{{$student->phone}}</td>
        <td>{{$student->section}}</td>
        <td><img src="/image/{{$student->image}}" width="96" height="96" /></td>
        <td>
            <a class="btn btn-info" href="{{ route('students.show', $student->id) }}"> Afficher </a>
        </td>
        <td>
            <a class="btn btn-primary" href="{{ route('students.edit', $student->id) }}"> Modifier </a>
        </td>
        <td>
            <form method="POST" action="{{ route('students.destroy', $student->id) }}"
                  onsubmit="return confirm('Supprimer cet étudiant ?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"> Supprimer </button>
            </form>
        </td>
    </tr>
    @endforeach
</tbody>

</table>
</div>

@endsection
