<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="index.php?page=home">Notre association </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=homeAnimal">Animaux</a>
            </li><li class="nav-item">
                <a class="nav-link" href="index.php?page=newAnimal">New Animeaux</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=homeProduct">Produits</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=newProduct">New produits</a>
            </li>
            <?php if (!isset($_SESSION["user"])): ?>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=signup">Inscription</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=login">Connexion</a>
                </li>
            <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=logout">Déconnexion</a>
                </li>
            <?php endif ?>
        </ul>
    </div>
</nav>


<main>
    <?= $content ?>
</main>
<footer>

</footer>

</body>
</html>
