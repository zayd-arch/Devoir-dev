@extends('layout')
@section('content')

<h3> Réinitialiser le mot de passe </h3>

@include('partials.messages')

<form method="POST" action="{{ route('password.update') }}">

@csrf

<input type="hidden" name="token" value="{{ $request->route('token') }}">

<div class="form-group">
    <label for="email">E-mail : </label>
    <input id="email" type="email" class="form-control" name="email" value="{{ old('email', $request->email) }}" required autofocus />
</div>

<div class="form-group">
    <label for="password">Nouveau mot de passe : </label>
    <input id="password" type="password" class="form-control" name="password" required />
</div>

<div class="form-group">
    <label for="password_confirmation">Confirmer le mot de passe : </label>
    <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required />
</div>

<button type="submit" class="btn btn-primary mt-3"> Réinitialiser le mot de passe </button>
</form>

@endsection
