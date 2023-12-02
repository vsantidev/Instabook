<head>
    @vite(['resources/js/app.js'])
</head>
<section class="header">
    <a class="brand" href="{{route('book.index')}}">Instabook</a>

    <nav class="navbar">
        <ul>
            <li><a href="{{route('book.index')}}">Home</a></li>
            <li class="burgerClick"><a>Librairie +</a>
                <ul>
                    <li><a href="">BD</a></li>
                    <li><a href="">Biographies</a></li>
                    <li><a href="">Fantastique</a></li>
                </ul>
            </li>    
            <li><a href="{{route('book.index')}}">Inscription</a></li>
            <li><a href="{{route('book.index')}}">Recherche</a></li>
            <li class="burgerClick"><a href="{{route('book.index')}}">Mon compte +</a>
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
        <div id="menu-btn" class="fa-solid fa-bars">
            <span></span>
            <span></span>
            <span></span>
        </div>
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