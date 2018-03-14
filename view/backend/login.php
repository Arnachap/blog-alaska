<?php ob_start(); ?>

<main class="text-center">
    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto">
                <form action="" method="post" id="login" class="p-3">
                    <p><label for="username">Administateur :</label><br>
                        <input type="text" name="username" id="username" required="required">
                    </p>

                    <p><label for="password">Mot de passe :</label><br>
                        <input type="password" name="password" id="password" required="required">
                    </p>

                    <p>
                        <input type="submit" value="Se connecter">
                    </p>
                </form>
            </div>
        </div>
    </div>
</main>

<?php $content = ob_get_clean(); ?>

<?php require('backend.php'); ?>