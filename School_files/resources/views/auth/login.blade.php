@extends('layout')
@section('content')

<h3> Connexion </h3>

@include('partials.messages')

<form method="POST" action="{{ route('login') }}">

@csrf

<div class="form-group">
    <label for="email">E-mail : </label>
    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus />
</div>

<div class="form-group">
    <label for="password">Mot de passe : </label>
    <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password" />
</div>

<div class="form-check mt-2">
    <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
    <label for="remember_me" class="form-check-label">Se souvenir de moi</label>
</div>

<div class="mt-3">
    @if (Route::has('password.request'))
        <a href="{{ route('password.request') }}">Mot de passe oublié ?</a>
    @endif
    <button type="submit" class="btn btn-primary ms-3"> Se connecter </button>
</div>
</form>

@endsection
