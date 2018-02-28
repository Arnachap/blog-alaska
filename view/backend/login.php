<form action="" method="post">
    <p><label for="user">Nom :</label><br>
        <input type="text" name="user" id="user" required="required">
    </p>

    <p><label for="password">Mot de passe :</label><br>
        <input type="password" name="password" id="password" required="required">
    </p>

    <p><input type="submit" value="Connexion"></p>
</form>

<?php require('template.php'); ?>