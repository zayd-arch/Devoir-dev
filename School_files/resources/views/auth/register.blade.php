@extends('layout')
@section('content')

<h3> Inscription </h3>

@include('partials.messages')

<form method="POST" action="{{ route('register') }}">

@csrf

<div class="form-group">
    <label for="name">Nom : </label>
    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus />
</div>

<div class="form-group">
    <label for="email">E-mail : </label>
    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required />
</div>

<div class="form-group">
    <label for="password">Mot de passe : </label>
    <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password" />
</div>

<div class="form-group">
    <label for="password_confirmation">Confirmer le mot de passe : </label>
    <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required />
</div>

<div class="mt-3">
    <a href="{{ route('login') }}">Déjà inscrit ?</a>
    <button type="submit" class="btn btn-primary ms-3"> S'inscrire </button>
</div>
</form>

@endsection
