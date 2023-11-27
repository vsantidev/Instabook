<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/app.css">
</head>
<body>
    <header>
        <nav>
            <div class="linkNav">
                <a href="">logo</a>
            </div>
            <div class="linkNav">
                <a href="">home</a>
            </div >
            <div class="linkNav">
                <a href="">search</a>
            </div>
            <div class="linkNav">
                <a href="">ajouter</a>
            </div>
            <div class="linkNav">
                <a href="">connexion</a>
            </div>
        </nav>
    </header>

    <section>
        @yield('title')
    </section>

    <section>
        @yield('content')
    </section>
</body>
</html>