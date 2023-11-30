<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/style.scss', 'resources/js/app.js'])
    <script src="https://kit.fontawesome.com/f9d009cb2a.js" crossorigin="anonymous"></script>
    <title>Instabook</title>
    {{-- <link rel="stylesheet" href="../../css/app.css"> --}}
</head>
<body>
    <header>
        <nav class="nav">
            <a class="nav__brand" href="{{route('book.index')}}">Instabook</a>
            <div class="menu-container">
                <ul class="mega-menu">
                    <li class="dropdown">
                        <div>
                            <a href="{{route('book.index')}}">
                            
                            <span>Librairie</span> </a>
                            <span><i class="fa-solid fa-caret-down"></i></span>
                        </div>
                        <ul class="menu">
                            <li class="menu__link">
                                <a href="">BD</a>
                            </li>
                            <li class="menu__link">
                                <a href="">Biographies</a>
                            </li>
                            <li class="menu__link">
                                <a href="">Fantastique</a>
                            </li>
                            <li class="menu__link">
                                <a href="">Jeunesse</a>
                            </li>
                            <li class="menu__link">
                                <a href="">Littérature</a>
                            </li>
                            <li class="menu__link">
                                <a href="">Manga</a>
                            </li>
                            <li class="menu__link">
                                <a href="">Narratif</a>
                            </li>
                            <li class="menu__link">
                                <a href="">Poétique</a>
                            </li>
                            <li class="menu__link">
                                <a href="">Policier</a>
                            </li>
                            <li class="menu__link">
                                <a href="">Romance</a>
                            </li>
                            <li class="menu__link">
                                <a href="">Sciences Fiction</a>
                            </li>
                            <li class="menu__link">
                                <a href="" >Théâtral</a>
                            </li>
                            <li class="menu__link">
                                <a href="" >Thriller</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu__link">
                        <a href="#recherche">
                            Recherche
                        </a>
                    </li>

                    <li class="menu__link"> 
                        <a href="{{route('dashboard')}}">
                            À propos
                        </a>
                    </li>
                    <li class="menu__link"> 
                        <a href="{{route('dashboard')}}">
                            Connexion
                        </a>
                    </li>
                </ul>
            </div>
            <div class="buttons">
                <button class="btn btn__log">Connexion</button>
                <button class="btn btn__log btn__log--color">Inscription</button>
                <button class="btn btn__menu">
                    <span><i class="fa-solid fa-bars"></i></span>
                </button>
            </div>

        </nav>

    </header>

    <section>
        @yield('title')
    </section>

    <section>
        @yield('content')
    </section>

    <footer>
        <div class="footer">
            <div class="adresse">
                <p>26 Boulevard Carabacel</p>
            </div>
            <div class="numero">
                <p>04 93 62 44 58</p>
            </div>
            <div class="carte">
                <a href="https://maps.app.goo.gl/t14GyQ3uu78UErnf8" target="_blank">carte</a>
            </div>
            <div class="copyright">
                &copy; InstaBook 2023
            </div>
        </div>
    </footer>
</body>
</html>