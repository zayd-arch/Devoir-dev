@extends('layout')
@section('content')

<h3> Mot de passe oublié </h3>

<p>
    Indiquez votre adresse e-mail et nous vous enverrons un lien pour choisir un nouveau mot de passe.
</p>

@include('partials.messages')

<form method="POST" action="{{ route('password.email') }}">

@csrf

<div class="form-group">
    <label for="email">E-mail : </label>
    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus />
</div>

<button type="submit" class="btn btn-primary mt-3"> Envoyer le lien de réinitialisation </button>
</form>

@endsection
