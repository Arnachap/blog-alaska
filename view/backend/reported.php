<?php ob_start(); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12 mx-auto">
            <h2 class="text-center py-3">Liste des commentaires signalés :</h2>

            <?php if (empty($reportedComments)) : ?>
                <div class="alert alert-success" role="alert">
                    Aucun commentaire n'a été signalé.
                </div>
            <?php else : ?>

            <table id="chaptersTable" class="mx-auto">
                <thead class="text-center text-uppercase">
                    <tr>
                        <th>Chapitre N°</th>
                        <th>Auteur</th>
                        <th>Contenu du commentaire</th>
                        <th>Modifier</th>
                        <th>Valider</th>
                        <th>Supprimer</th>
                    </tr>
                </thead>

                <tbody>

                    <?php foreach ($reportedComments as $comment) : ?>

                    <tr class="text-center">
                        <td>
                            <?= $comment->getPostId() ?>
                        </td>

                        <td class="text-left font-weight-bold">
                            <?= $comment->getAuthor() ?>
                        </td>

                        <td id="comment<?= $comment->getId() ?>">
                            <?= $comment->getComment() ?>
                        </td>

                        <td>
                            <button id="<?= $comment->getId() ?>" type="button" class="btn btn-primary editComment" data-toggle="modal" data-target="#commentEdit">
                                <i class="fas fa-edit"></i>
                            </button>
                        </td>
                        
                        <td>
                            <button id="<?= $comment->getId() ?>" type="button" class="btn btn-success validComment" data-toggle="modal" data-target="#commentValidate">
                                <i class="fas fa-check"></i>
                            </button>
                        </td>

                        <td>
                            <button id="<?= $comment->getId() ?>" type="button" class="btn btn-danger delComment" data-toggle="modal" data-target="#commentDelete">
                                <i class="fas fa-trash"></i>
                            </button>
                        </td>
                    </tr>

                     <?php endforeach ?>

                </tbody>
            </table>

            <div class="modal fade" id="commentEdit" tabindex="-1" role="dialog" aria-labelledby="commentEdit" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modifier le commentaire</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="" method="post">

                            <div class="modal-body">
                                <input id="commentId" name="commentId" type="hidden">
                                <textarea class="w-100" id="newComment" name="newComment"></textarea>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                <button type="submit" class="btn btn-primary">Modifier le commentaire</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="commentValidate" tabindex="-1" role="dialog" aria-labelledby="commentValidate" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Valider le commentaire</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <p>Êtes-vous sur de vouloir valider ce commentaire ?</p> 
                        </div>

                        <div class="modal-footer modal-validate">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                            <a href="">
                                <button type="button" class="btn btn-success">Valider le commentaire</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="commentDelete" tabindex="-1" role="dialog" aria-labelledby="commentDelete" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Supprimer le commentaire</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <p>Voulez-vous supprimer ce commentaire de manière définitive ?</p> 
                        </div>

                        <div class="modal-footer modal-delete">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                            <a href="">
                                <button type="button" class="btn btn-danger">Supprimer le commentaire</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php endif ?>

<?php $content = ob_get_clean(); ?>

<?php require('backend.php'); ?>
