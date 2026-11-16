@extends('layout')
@section('content')

<h3> Confirmer le mot de passe </h3>

<p>
    Cette zone est sécurisée. Veuillez confirmer votre mot de passe avant de continuer.
</p>

@include('partials.messages')

<form method="POST" action="{{ route('password.confirm') }}">

@csrf

<div class="form-group">
    <label for="password">Mot de passe : </label>
    <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password" />
</div>

<button type="submit" class="btn btn-primary mt-3"> Confirmer </button>
</form>

@endsection
