<?php $title = 'Billet Simple pour l\'Alaska'; ?>

<?php ob_start(); ?>

<!-- Page Header -->
<header class="masthead" style="background-image: url('public/img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>Billet Simple pour l'Alaska</h1>
                    <span class="subheading">Un roman trépidant,
                        <br> écrit par Jean Forteroche</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <?php foreach ($chapters as $chapter) : ?>

            <div class="post-preview">
                <a href="chapter/<?= $chapter->getId() ?>">
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

            <?php endforeach ?>

            <hr>

            <!-- Pager -->
            <div class="clearfix">
                <a class="btn btn-primary float-right" href="summary">Tous les chapitres &rarr;</a>
            </div>
        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('frontend.php'); ?>