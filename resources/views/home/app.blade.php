<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Instabook</title>

    {{-- font awesome script --}}
    <script src="https://kit.fontawesome.com/f9d009cb2a.js" crossorigin="anonymous"></script>

    {{-- custom css file link + vite + js --}}
    @vite(['resources/css/style.scss', 'resources/js/app.js'])

</head>
<body>
{{-- header section starts --}}
    <header>
        <section class="header">
            <a class="brand" href="{{route('book.index')}}">Instabook</a>

            <nav class="navbar">
                <ul>
                    <li><a href="{{route('book.index')}}">Home</a></li>
                    <li><a href="{{route('book.index')}}">Librairie +</a>
                        <ul>
                            <li><a href="">BD</a></li>
                            <li><a href="">Biographies</a></li>
                            <li><a href="">Fantastique</a></li>
                        </ul>
                    </li>    
                    <li><a href="{{route('book.index')}}">Inscription</a></li>
                    <li><a href="{{route('book.index')}}">Recherche</a></li>
                    <li><a href="{{route('book.index')}}">Mon compte +</a>
                        <ul>
                            <li><a href="{{route('profile.edit')}}">Profil</a></li>
                            <li><a href="{{route('book.create')}}">Création de livre</a></li>
                            <li><form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Déconnexion') }}
                                </x-dropdown-link>
                            </form></li>
                        </ul>
                    </li>
                </ul>
            </nav>
    
            <div class="icons">
                <div id="menu-btn" class="fa-solid fa-bars"></div>
                <div id="search-btn" class="fa-solid fa-magnifying-glass"></div>
            </div>

            <form action="" class="search-form">
                <input type="search" name="" placeholder="Recherche ici..." id="search-box">
                <label for="search-box" class="fa-solid fa-magnifying-glass"></label>
            </form>

        </section>
        

        {{-- <nav class="nav">
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
                        <a href="{{route('search.index')}}">
                            Recherche
                        </a>
                    </li>

                    <li class="menu__link"> 
                        <a href="{{route('dashboard')}}">
                            À propos
                        </a>
                    </li>
                    <li class="menu__link"> 
                        <a href="{{route('profile')}}">
                            Mon profil
                        </a>
                    </li>
                    <li class="dropdown">
                        <div>
                            
                            <span>Mon compte</span> </a>
                            <span><i class="fa-solid fa-caret-down"></i></span>
                        </div>
                        <ul class="menu">
                            <li class="menu__link">
                                <a href="{{route('profile.edit')}}">
                                    Profil
                                </a>
                            </li>
                            <li class="menu__link">
                                <a href="{{route('book.create')}}">Création de livre</a>
                            </li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
    
                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="buttons">
                <button class="btn btn__log"><a href="{{route('dashboard')}}">
                    Connexion
                </a></button>
                <button class="btn btn__log btn__log--color">Inscription</button>
                <button class="btn btn__menu">
                    <span><i class="fa-solid fa-bars"></i></span>
                </button>
            </div>

        </nav> --}}

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