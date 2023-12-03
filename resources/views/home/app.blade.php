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
                    <li><a href="#">Librairie +</a>
                        <ul>
                            <li><a href="{{route('genre.show', 1)}}">Bande Dessinée</a></li>
                            <li><a href="">Biographies</a></li>
                            <li><a href="">Fantastique</a></li>
                        </ul>
                    </li>    
                    <li><a href="{{route('book.index')}}">Inscription</a></li>
                    <li><a href="#">Mon compte +</a>
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

            <form action="{{route('search.store')}}" class="search-form" method="post">
                @csrf
                <input type="search" name="search" placeholder="Recherche ici..." id="search-box">
                <select name="option">
                    <option value="0">-- option --</option>
                    <option value="titre">titre</option>
                    <option value="genre">genres</option>
                    <option value="auteurs">auteurs</option>
                </select>
                <button for="search-box" class="fa-solid fa-magnifying-glass"></button>
            </form>
            {{-- <form action="{{route('search.store')}}" class="search-form" method="post">
                @csrf
                <input type="search" name="search" placeholder="Recherche ici..." id="search-box">

                <button type="submit">rechercher</button> --}}
        </section>
    </header>
    {{-- SECTION HEADER END --}}

    {{-- SECTION VITRINE START --}}
    <section class="home">
        <div class="slide active">
            <div class="contentStore">
                <span>“La vraie lecture commence quand on ne lit plus seulement pour se distraire et se fuir, mais pour se trouver.”</span>
                <h3>Jean Guéhenno</h3>
            </div>
        </div>
    </section>
    {{-- SECTION VITRINE END --}}

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

 
        <section>
            @yield('title')
        </section>
    
        <section>
            @yield('content')
        </section>


    {{-- section footer start --}}
    {{-- <footer> --}}
        <section class="footer">
            <div class="box-container">
                <div class="box">
                    <h3>Liens rapides</h3>
                    <a href="#"><i class="fa-solid fa-caret-down"></i>Home</a>
                    <a href="#"><i class="fa-solid fa-caret-down"></i>À propos</a>
                    {{-- <a href="#"><i class="fa-solid fa-caret-down"></i>Contact</a> --}}
                    <a href="#"><i class="fa-solid fa-caret-down"></i>Connexion</a>
                    <a href="#"><i class="fa-solid fa-caret-down"></i>Inscription</a>
                    <a href="#"><i class="fa-solid fa-caret-down"></i>Termes d'utilisation</a>
                    <a href="#"><i class="fa-solid fa-caret-down"></i>Politique de confidentialité</a>
                    {{-- <a href="#"><i class="fa-solid fa-caret-down"></i>Carte</a> --}}
                </div>

                <div class="box">
                    <h3>Informations</h3>
                    <a href="#"><i class="fa-solid fa-caret-right"></i>Bocal Academy</a>
                    <a href="#"><i class="fa-solid fa-caret-right"></i>26 Boulevard Carabacel</a>
                    <a href="#"><i class="fa-solid fa-caret-right"></i>06000 Nice</a>
                    <a href="#"><i class="fa-solid fa-caret-right"></i>04 93 62 44 58</a>
                    {{-- <a href="#"><i class="fa-solid fa-caret-right"></i>Carte</a> --}}
                    <a href="https://maps.app.goo.gl/t14GyQ3uu78UErnf8" target="_blank"><i class="fa-solid fa-caret-right"></i>Carte</a>
                </div>

                <div class="box">
                    <h3>Suivez-nous</h3>
                    <a href="#"><i class="fa-brands fa-linkedin"></i>LinkedIn</a>
                    <a href="#"><i class="fa-brands fa-instagram"></i>Instagram</a>
                    <a href="#"><i class="fa-brands fa-x-twitter"></i>Twitter</a>
                    <a href="#"><i class="fa-brands fa-facebook"></i>Facebook</a>
                    <a href="#"><i class="fa-brands fa-github"></i>Github</a>
                    <a href="#"><i class="fa-brands fa-pinterest"></i>Pinterest</a>

                </div>

                <div class="box">
                    <h3>Newsletter</h3>
                    <p>Abonnez-vous aux dernières news</p>
                    <form action="">
                        <input type="email" placeholder="Entrez votre email" id="">
                        <input type="submit" value="subscribe" class="button">
                    </form>
                </div>
               
            </div>
            <div class="credits"> Créé par <span>Sergio</span> & <span>Véronique</span> | Formation développeur web & mobile | &copy; Bocal Academy 2023 </div>
        </section>
    {{-- </footer> --}}
    {{-- section footer end --}}


</body>
</html>