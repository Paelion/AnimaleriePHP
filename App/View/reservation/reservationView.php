
<div>
    <div style=" display: flex; padding: 50px">
        <img src="https://fakeimg.pl/300x200/" alt="Card image cap">
        <div class="card-body">
            <h3>Réservation de <?= $animal->nom ?></h3>
            <div>
                <p>Type: <?= $animal->type ?></p>
                <p>Race: <?= $animal->race ?></p>
                <p>Taille: <?= $animal->taille ?>cm</p>
                <p>Poid: <?= $animal->poid ?>kg</p>
                <p>Age: <?= $animal->age ?>an(s)</p>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <form action="index.php?page=reservationDate" method="post">
        <div class="form-group mt-3">
            <label for="nom">Rappeler votre nom</label>
            <input class="form-control" type="text" name="nom">
        </div>
        <div class="form-group mt-3">
            <label for="nom">Rappeler le nom de l'animal</label>
             <input class="form-control" type="text" name="titre">
        </div>
        <div class="form-group mt-3" style="display: flex">
            <label for="date" style="margin: 10px 0">Séléctioner un jour :</label>

            <select name="jour" class="form-control" style="width: 10%; margin: 0 10px">
                <?php for ($i = 1; $i <= 31; $i++): ?>
                    <option value="<?= $i ?>"><?= $i ?></option>
                <?php endfor; ?>
            </select>

            <select name="mois" class="form-control" style="width: 10%; margin: 0 10px">
                <option value="1">janvier</option>
                <option value="2">février</option>
                <option value="3">mars</option>
                <option value="4">avril</option>
                <option value="5">mai</option>
                <option value="6">juin</option>
                <option value="7">juillet</option>
                <option value="8">aout</option>
                <option value="9">septembre</option>
                <option value="10">octobre</option>
                <option value="11">novembre</option>
                <option value="12">décembre</option>
            </select>

            <select name="annee" class="form-control" style="width: 10%; margin: 0 10px">
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
            </select>
        </div>
        <input type="submit" class="btn btn-success mt-3">
    </form>
</div>

