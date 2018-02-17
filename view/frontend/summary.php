<?php $title = 'Billet Simple pour l\'Alaska - Sommaire'; ?>

<?php ob_start(); ?>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <h1 class="text-center font-weight-bold text-uppercase mt-4">Sommaire :</h1>

            <?php while ($data = $posts->fetch()) { ?>

            <div class="post-preview">
                <a href="index.php?action=post&amp;id=<?= $data['id'] ?>">
                    <h2 class="post-title">Chapitre
                        <?= $data['id'] . ' : ' . htmlspecialchars($data['title']) ?>
                    </h2>
                    <h3 class="post-subtitle">
                        <?php htmlspecialchars($data['intro']) ?>
                    </h3>
                </a>
                <p class="post-meta">Posté par
                    <span class="name">Jean Forteroche</span> le
                    <?php $data['article_date'] ?>
                </p>
            </div>
            <hr>

            <?php 
                    } 
                    $posts->closeCursor();
                ?>
        </div>
    </div>
</div>


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>