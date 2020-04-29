<div class="affichage mt-5 justify-content-around">

    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="https://fakeimg.pl/300x200/" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><?= $animal->nom ?></h5>
            <div class="card-text">
                <p>Type: <?= $animal->type ?></p>
                <p>Race: <?= $animal->race ?></p>
                <p>Taille: <?= $animal->taille ?>cm</p>
                <p>Poid: <?= $animal->poid ?>kg</p>
                <p>Age: <?= $animal->age ?>an(s)</p>
            </div>
            <a href="index.php?page=modifyAnimal&id=<?= $animal->id ?>" class="btn btn-primary">Modifier</a>
            <a href="index.php?page=deleteAnimal&id=<?= $animal->id ?>" class="btn btn-danger">Supprimer</a>
        </div>
    </div>
</div>