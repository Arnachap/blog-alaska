<?php ob_start(); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12 mx-auto">
            <h2 class="text-center py-3">Boîte de réception :</h2>

            <?php if (empty($messages)) : ?>
                <div class="alert alert-success" role="alert">
                    Votre boîte de réception est vide.
                </div>
            <?php else : ?>

            <table id="chaptersTable" class="mx-auto">
                <thead class="text-center text-uppercase">
                    <tr>
                        <th>Auteur</th>
                        <th>Email</th>
                        <th>Date</th>
                        <th>Lire</th>
                        <th>Suppr.</th>
                    </tr>
                </thead>

                <tbody>

                    <?php foreach ($messages as $message) : ?>

                    <tr class="text-center <?php if (!$message->getViewed()) { echo 'font-weight-bold'; } ?>">
                        <td>
                            <?= $message->getUsername() ?>
                        </td>

                        <td class="text-left">
                            <?= $message->getEmail() ?>
                        </td>

                        <td>
                            <?= $message->getMessageDate() ?>
                        </td>

                        <td>
                            <button id="<?= $message->getId() ?>" type="button" class="btn btn-info viewMessage" data-toggle="modal" data-target="#commentView">
                                <i class="fas fa-file-alt"></i>
                            </button>
                        </td>

                        <td>
                            <button id="<?= $message->getId() ?>" type="button" class="btn btn-danger delMessage" data-toggle="modal" data-target="#messageDelete">
                                <i class="fas fa-trash"></i>
                            </button>
                        </td>
                    </tr>

                    <div class="modal fade" id="commentView" tabindex="-1" role="dialog" aria-labelledby="commentView" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Message :</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="modal-body">
                                    <p><?= $message->getMessage() ?></p> 
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                    <a href="admin&amp;action=viewMessage&amp;id=<?= $message->getId() ?>">
                                        <button type="button" class="btn btn-success">Marquer le message comme lu</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                     <?php endforeach ?>

                </tbody>
            </table>

            <div class="modal fade" id="messageDelete" tabindex="-1" role="dialog" aria-labelledby="commentDelete" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Supprimer le message</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <p>Voulez-vous supprimer ce message de manière définitive ?</p> 
                        </div>

                        <div class="modal-footer modal-delete">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                            <a href="">
                                <button type="button" class="btn btn-danger">Supprimer le message</button>
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