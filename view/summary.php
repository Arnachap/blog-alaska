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

            <?php foreach ($chapters as $chapter) : ?>

            <div class="post-preview">
                <a href="post/<?= $chapter->getId() ?>">
                    <h2 class="post-title">Chapitre
                        <?= $chapter->getId() . ' : ' . htmlspecialchars($chapter->getTitle()) ?>
                    </h2>
                    <h3 class="post-subtitle">
                        <?= htmlspecialchars($chapter->getIntro()) ?>
                    </h3>
                </a>
                <p class="post-meta">Posté par
                    <span class="name">Jean Forteroche</span> le
                    <?= $chapter->getChapterDate() ?>
                </p>
            </div>

            <hr>

            <?php endforeach ?>

        </div>
    </div>
</div>


<?php $content = ob_get_clean(); ?>

<?php require('frontend.php'); ?>