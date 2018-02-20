<?php $title =  htmlspecialchars($post['title']) . ' - Billet Simple pour l\'Alaska'; ?>

<?php ob_start(); ?>

<!-- Page Header -->
<header class="masthead" style="background-image: url('public/img/post-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="post-heading">
                    <h1>Chapitre
                        <?= $post['id'] . ':<br>' . htmlspecialchars($post['title']) ?>
                    </h1>
                    <h2 class="subheading"><?= $post['intro'] ?></h2>
                    <span class="meta">Posté par
                        <span class="name">Jean Forteroche</span> le
                        <?= $post['article_date'] ?>
                    </span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Post Content -->
<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <p>
                    <?= nl2br(htmlspecialchars($post['article'])) ?>
                </p>
            </div>
        </div>
    </div>
</article>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>