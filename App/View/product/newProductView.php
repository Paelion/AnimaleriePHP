<div class="container mt-5">
    <form action="../public/index.php?page=newProduct" method="POST">
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom">
        </div>
        <div class="form-group">
            <label for="type">Type</label>
            <select name="type" id="">
                <option value="1">Chien</option>
                <option value="2">Chat</option>
            </select>
        </div>
        <div class="form-group">
            <label for="animal">Animal</label>
            <input type="text" class="form-control" id="animal" name="animal">
        </div>
        <div class="form-group">
            <label for="prix">Prix</label>
            <input type="number" class="form-control" id="prix" name="prix">
        </div>
        <div class="form-group">
            <label for="stock">Stock</label>
            <input type="number" class="form-control" id="stock" name="stock">
        </div>

        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
</div>
