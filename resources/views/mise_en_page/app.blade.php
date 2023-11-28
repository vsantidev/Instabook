<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/style.scss', 'resources/js/app.js'])

    <title>Document</title>
    {{-- <link rel="stylesheet" href="../../css/app.css"> --}}
</head>
<body>
    <header>
        <section class="navigation">
            <div class="brand">
                <a href="{{route('book.index')}}">Instabook</a>
            </div>
            
            <nav class="navContainer">
                {{-- <div class="nav-mobile">
                    <a id="nav-toggle" href=""><span></span></a>
                </div> --}}

                    <a class="navContainer__link navContainer__link--font" href="">home</a>


                    <a href="{{route('book.index')}}" class="navContainer__link">search</a>

                    <a href="{{route('book.index')}}" class="navContainer__link">librairie</a>

                    <a href="navContainer__link">ajouter</a>


                    <a href="{{route('dashboard')}}">connexion</a>

            </nav>
        </section>

    </header>

    <section>
        @yield('title')
    </section>

    <section>
        @yield('content')
    </section>
</body>
</html>