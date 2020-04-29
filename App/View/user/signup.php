<div class="container mt-5">
    <form action="index.php?page=signup" method="POST">
        <p class=text-danger><?= $message ?></p>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
       <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom">
        </div>
        <div class="form-group">
            <label for="prenom">Prénom</label>
            <input type="text" class="form-control" id="prenom" name="prenom">
        </div>
        <div class="form-group">
            <label for="adresse">Adresse</label>
            <input type="text" class="form-control" id="adresse" name="adresse">
        </div>
        <div class="form-group">
            <label for="postal">Code Postal</label>
            <input type="text" class="form-control" id="postal" name="postal">
        </div>
        <div class="form-group">
            <label for="mail">Mail</label>
            <input type="text" class="form-control" id="mail" name="mail">
        </div>
        <div class="form-group">
            <label for="telephone">Téléphone</label>
            <input type="text" class="form-control" id="telephone" name="telephone">
        </div>
        <div class="form-group">
            <label for="role">Role</label>
            <input type="text" class="form-control" id="role" name="role">
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
</div>