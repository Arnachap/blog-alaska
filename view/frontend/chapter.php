<?php $title =  htmlspecialchars($chapter->getTitle()) . ' Billet Simple pour l\'Alaska'; ?>

<?php ob_start(); ?>

<!-- Page Header -->
<header class="masthead" style="background-image: url('/blog-alaska/public/img/post-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="post-heading">
                    <h1>Chapitre
                        <?= $chapter->getId() . ':<br>' . htmlspecialchars($chapter->getTitle()) ?>
                    </h1>
                    <h2 class="subheading"><?= $chapter->getIntro() ?></h2>
                    <span class="meta">Posté par
                        <span class="name">Jean Forteroche</span> le
                        <?= $chapter->getChapterDate() ?>
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
                    <?= nl2br(htmlspecialchars($chapter->getArticle())) ?>
                </p>
            </div>
        </div>
    </div>
</article>

<hr>

<!-- Comment Section -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <h2 class="my-3 text-center">Commentaires :</h2>
            <div class="my-3">

                <?php foreach ($comments as $comment) : ?>

                    <p class="comment-heading"><em><?= htmlspecialchars($comment->getAuthor()) ?></em>, le <?= $comment->getCommentDate() ?> :</p>
                    <p class="comment w-75"><?= nl2br(htmlspecialchars($comment->getComment())) ?></p>

                <?php endforeach ?>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <h3 class="mt-5">Ajouter un commentaire :</h3>
            <form name="sentMessage" id="contactForm" action="/blog-alaska/index.php?url=addComment&amp;id=<?= $chapter->getId() ?>" method="post">
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label for="author">Nom</label>
                        <input type="text" class="form-control" placeholder="Nom" id="author" name="author" required data-validation-required-message="Veuillez entrer votre nom.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>

                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label for="comment">Message</label>
                        <textarea rows="5" class="form-control" placeholder="Message" id="comment" name="comment" required data-validation-required-message="Veuillez entrer un message."></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <br>
                <div id="success"></div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" id="sendMessageButton">Envoyer</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('frontend.php'); ?>