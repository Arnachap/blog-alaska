<?php ob_start(); ?>

    <div id="manageButtons" class="d-flex">
        <a href="edit/<?= $chapter->getId() ?>">
            <button class="btn btn-primary">
                <i class="fas fa-edit"></i>
            </button>
        </a>
        
        <button id="<?= $chapter->getId() ?>" type="button" class="btn btn-danger delBtn" data-toggle="modal" data-target="#confirmDelete">
            <i class="fas fa-trash"></i>
        </button>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="text-center">
                    <h1 class="p-3">Chapitre <?= $chapter->getId()?> :<br>
                        <?= htmlspecialchars($chapter->getTitle()) ?>
                    </h1>

                    <div class="modal fade" id="confirmDelete" tabindex="-1" role="dialog" aria-labelledby="confirmDelete" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Supprimer le chapitre</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="modal-body">
                                    <p>Voulez-vous supprimer ce chapitre de manière définitive ?</p> 
                                </div>

                                <div class="modal-footer modal-delete">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                    <a href="">
                                        <button type="button" class="btn btn-danger">Supprimer le chapitre</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h2 class="font-weight-light">
                        <?= $chapter->getIntro() ?>
                    </h2>

                    <span>Posté le
                        <?= $chapter->getChapterDate() ?>
                    </span>
                </div>
            </div>
        </div>
    </div>
</header>

<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <p>
                    <?= nl2br($chapter->getArticle()) ?>
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

                    <div class="comment-heading">
                        <p><em><?= htmlspecialchars($comment->getAuthor()) ?></em>, le <?= $comment->getCommentDate() ?> :</p>
                    </div>

                    <div class="comment row w-75">
                        <p class="col-12">
                            <?= nl2br(htmlspecialchars($comment->getComment())) ?>
                        </p>
                    </div>

                <?php endforeach ?>

            </div>
        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('backend.php'); ?>