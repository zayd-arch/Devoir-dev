@extends('layout')
@section('content')

<h3> Modifier l'étudiant </h3>

@include('partials.messages')

<form method="POST" action="{{ route('students.update', $student->id) }}" enctype="multipart/form-data">

@csrf
@method('PUT')

<div class="form-group">
    <label for="name">Nom : </label>
    <input type="text" class="form-control" name="name" value="{{ old('name', $student->name) }}" />
</div>

<div class="form-group">
    <label for="email">E-mail : </label>
    <input type="text" class="form-control" name="email" value="{{ old('email', $student->email) }}" />
</div>

<div class="form-group">
    <label for="phone">Téléphone : </label>
    <input type="text" class="form-control" name="phone" value="{{ old('phone', $student->phone) }}" />
</div>

<div class="form-group">
    <label for="section">Section : </label>
    <input type="text" class="form-control" name="section" value="{{ old('section', $student->section) }}" />
</div>

<div class="form-group">
    <label for="image">Image (laisser vide pour garder l'image actuelle) : </label>
    <input type="file" class="form-control" name="image" />
    <img src="/image/{{ $student->image }}" width="96" height="96" class="mt-2">
</div>

<button type="submit" class="btn btn-primary"> Mettre à jour </button>
</form>

@endsection
