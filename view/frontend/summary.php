<?php $title = 'Sommaire - Billet Simple pour l\'Alaska'; ?>

<?php ob_start(); ?>

<!-- Page Header -->
<header class="masthead" style="background-image: url('public/img/summary-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>Sommaire :</h1>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-md-10 mx-auto">

            <?php foreach ($posts as $post) { ?>

            <div class="post-preview">
                <a href="index.php?action=post&amp;id=<?= $post->getId() ?>">
                    <h2 class="post-title">Chapitre
                        <?= $post->getId() . ' : ' . htmlspecialchars($post->getTitle()) ?>
                    </h2>
                    <h3 class="post-subtitle">
                        <?= htmlspecialchars($post->getIntro()) ?>
                    </h3>
                </a>
                <p class="post-meta">Posté par
                    <span class="name">Jean Forteroche</span> le
                    <?= $post->getPostDate() ?>
                </p>
            </div>

            <hr>

            <?php } ?>

        </div>
    </div>
</div>


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>