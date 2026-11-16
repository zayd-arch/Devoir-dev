<!DOCTYPE html>
<html lang="fr">

<head>
  <link href="/css/app.css" rel="stylesheet">
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <script src="/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="/css/style.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestion de l'école</title>
</head>

<body>
  <div class="container-fluid p-0">
    <img src="/img/header.jpg" class="resp" style="height: 220px;">
  </div>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Afficher la navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ url('/home')}}">Accueil</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="https://getbootstrap.com/">Actualités</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">À propos</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Archives</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Cours</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Projets</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Bibliothèque</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Formations
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Développement Web</a></li>
              <li><a class="dropdown-item" href="#">Développement Mobile</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Développement Desktop</a></li>
              <li><a class="dropdown-item" href="#">Science des données</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contactez-nous</a>
          </li>

          @guest
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">Connexion</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">Inscription</a>
          </li>
          @endguest

          @auth
          <li class="nav-item">
            <span class="nav-link disabled">{{ Auth::user()->name }}</span>
          </li>
          <li class="nav-item">
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <button type="submit" class="btn btn-link nav-link">Déconnexion</button>
            </form>
          </li>
          @endauth
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Rechercher" aria-label="Rechercher">
          <button class="btn btn-outline-success" type="submit">Rechercher</button>
        </form>
      </div>
    </div>
  </nav>

  <div class="container" style="margin-top: 20px; margin-left:0px;">
    <div class="row">

      <div class="col-2" style="margin-right:20px; margin-bottom:5px;">
        <div class="sidebar">
          <header>Menu principal</header>
          <a href="{{ url('/students')}}" class="active">
            <i class="fas fa-qrcode"></i>
            <span>Gérer les étudiants</span>
          </a>
          <a href="#">
            <i class="fas fa-link"></i>
            <span>Raccourcis</span>
          </a>
          <a href="#">
            <i class="fas fa-stream"></i>
            <span>Aperçu</span>
          </a>
          <a href="#">
            <i class="fas fa-calendar"></i>
            <span>Événements</span>
          </a>
          <a href="#">
            <i class="far fa-question-circle"></i>
            <span>À propos</span>
          </a>
          <a href="#">
            <i class="fas fa-sliders-h"></i>
            <span>Services</span>
          </a>
          <a href="#">
            <i class="far fa-envelope"></i>
            <span>Contact</span>
          </a>
        </div>
      </div>

      <div class="col-9">
        <div class="card" style="width: 100%; margin-left:75px; margin-right:0px;">
          <div class="card-header bg-primary" style="color:white; font-size: 18px; font-weight:bold;" style="width: 100%;">
            Gestion de l'école !
          </div>
          <div class="card-body">

            <div class="container">
              @yield('content')
            </div>

            <p class="card-text">
            </p>
            <a href="#" class="btn btn-primary">Lire la suite !</a>
          </div>
        </div>
      </div>

    </div>
  </div>
  <footer class="bg-dark text-center text-white">
    <div class="container p-4 pb-0">
      <section class="">
        <form action="">
          <div class="row d-flex justify-content-center">
            <div class="col-auto">
              <p class="pt-2">
                <strong>Inscrivez-vous à notre newsletter</strong>
              </p>
            </div>

            <div class="col-md-5 col-12">
              <div class="form-outline form-white mb-4">
                <input type="email" id="form5Example2" class="form-control" />
                <label class="form-label" for="form5Example2">Adresse e-mail</label>
              </div>
            </div>

            <div class="col-auto">
              <button type="submit" class="btn btn-outline-light mb-4">
                S'abonner
              </button>
            </div>
          </div>
        </form>
      </section>
    </div>

    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Tous droits réservés :
      <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
  </footer>

</body>

</html>
