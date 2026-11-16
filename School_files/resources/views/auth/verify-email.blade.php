@extends('layout')
@section('content')

<h3> Vérification de l'adresse e-mail </h3>

<p>
    Merci pour votre inscription ! Avant de commencer, veuillez vérifier votre adresse e-mail en cliquant sur le lien que nous venons de vous envoyer. Si vous n'avez rien reçu, nous vous en enverrons un autre.
</p>

@if (session('status') == 'verification-link-sent')
    <div class="alert alert-success">
        Un nouveau lien de vérification a été envoyé à l'adresse e-mail indiquée lors de l'inscription.
    </div>
@endif

<div class="d-flex">
    <form method="POST" action="{{ route('verification.send') }}">
        @csrf
        <button type="submit" class="btn btn-primary"> Renvoyer l'e-mail de vérification </button>
    </form>

    <form method="POST" action="{{ route('logout') }}" class="ms-3">
        @csrf
        <button type="submit" class="btn btn-secondary"> Déconnexion </button>
    </form>
</div>

@endsection
