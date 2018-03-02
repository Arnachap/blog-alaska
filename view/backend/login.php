<?php ob_start(); ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="" method="post" class="py-3 mx-3 text-center bg-light">
                <p><label for="user">Nom :</label><br>
                    <input type="text" name="user" id="user" required="required">
                </p>

                <p><label for="password">Mot de passe :</label><br>
                    <input type="password" name="password" id="password" required="required">
                </p>

                <p><input type="submit" value="Connexion" class="btn btn-primary"></p>
            </form>
        </div>
    </div>
</div>


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>