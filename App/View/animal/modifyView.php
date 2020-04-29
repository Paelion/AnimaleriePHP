<div class="container mt-5">
    <form action="index.php?page=saveModifyAnimal&id=<?= $animal->id ?>" method="POST">
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" value="<?= $animal->nom ?>">
        </div>
        <div class="form-group">
            <label for="type">Type</label>
            <select name="type" id="type" value="<?= $animal->type ?>">
                <option value="1">Chien</option>
                <option value="2">Chat</option>
            </select>
        </div>
        <div class="form-group">
            <label for="race">Race</label>
            <input type="text" class="form-control" id="race" name="race" value="<?= $animal->race ?>">
        </div>
        <div class="form-group">
            <label for="taille">Taille</label>
            <input type="number" class="form-control" id="taille" name="taille" value="<?= $animal->taille ?>">
        </div>
        <div class="form-group">
            <label for="poid">Poid</label>
            <input type="number" class="form-control" id="poid" name="poid" value="<?= $animal->poid ?>">
        </div>
        <div class="form-group">
            <label for="age">Age</label>
            <input type="number" class="form-control" id="age" name="age" value="<?= $animal->age ?>">
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
</div>

