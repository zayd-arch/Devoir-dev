@extends('layout')
@section('content')

<meta name="csrf-token" content="{{ csrf_token() }}">

<h3> Ajouter un étudiant </h3>

@include('partials.messages')

<form method="POST" action="{{ route('students.store') }}" enctype="multipart/form-data">

@csrf

<div class="form-group">
    <label for="name">Nom : </label>
    <input type="text" class="form-control" name="name" value="{{ old('name') }}" />
</div>

<div class="form-group">
    <label for="email">E-mail : </label>
    <input type="text" class="form-control" name="email" value="{{ old('email') }}" />
</div>

<div class="form-group">
    <label for="phone">Téléphone : </label>
    <input type="text" class="form-control" name="phone" value="{{ old('phone') }}" />
</div>

<div class="form-group">
    <label for="section">Section : </label>
    <input type="text" class="form-control" name="section" value="{{ old('section') }}" />
</div>

<div class="form-group">
    <label for="image">Image : </label>
    <input type="file" class="form-control" name="image" />
</div>

<button type="submit" class="btn btn-primary"> Ajouter l'étudiant </button>
</form>

@endsection
