<div class="container mt-5">
    <form action="../public/index.php?page=modifyProduct&id=<?= $product->id ?>" method="POST">
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" value="<?= $product->nom ?>">
        </div>
        <div class="form-group">
            <label for="type">Type</label>
            <select name="type" id="type" value="<?= $product->type ?>">
                <option value="1">Chien</option>
                <option value="2">Chat</option>
            </select>
        </div>
        <div class="form-group">
            <label for="animal">Animal</label>
            <input type="text" class="form-control" id="animal" name="animal" value="<?= $product->animal ?>">
        </div>
        <div class="form-group">
            <label for="prix">Prix</label>
            <input type="number" class="form-control" id="prix" name="prix" value="<?= $product->prix ?>">
        </div>
        <div class="form-group">
            <label for="stock">Stock</label>
            <input type="number" class="form-control" id="stock" name="stock" value="<?= $product->stock ?>">
        </div>

        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
</div>
