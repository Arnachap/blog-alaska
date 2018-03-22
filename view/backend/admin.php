<?php ob_start(); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12 mx-auto">

            <?php if (!empty($reportedComments)) : ?>
                <div class="alert alert-danger" role="alert">
                    Des commentaires ont étés signalés. <a href="reported&amp;action=viewReportedComments" class="alert-link">Cliquez ici pour gérer les commentaires signalés</a>.
                </div>
            <?php endif ?>

            <h2 class="text-center py-3">Liste des chapitres :</h2>

            <table id="chaptersTable" class="mx-auto">
                <thead class="text-center text-uppercase">
                    <tr>
                        <th>N°</th>
                        <th>Titre</th>
                        <th>Date</th>
                        <th>Editer</th>
                        <th>Supprimer</th>
                    </tr>
                </thead>

                <tbody>

                    <?php foreach ($chapters as $chapter) : ?>

                    <tr class="text-center">
                        <td>
                            <?= $chapter->getId() ?>
                        </td>

                        <td class="text-left font-weight-bold">
                            <a href="chapterBackend&amp;action=viewChapter&amp;id=<?= $chapter->getId() ?>">
                                <?= $chapter->getTitle() ?>
                            </a>
                        </td>

                        <td>
                            <?= $chapter->getChapterDate() ?>
                        </td>

                        <td>
                            <a href="chapterBackend&amp;action=editChapter&amp;id=<?= $chapter->getId() ?>">
                                <button class="btn btn-primary">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </a>
                        </td>

                        <td>
                            <button id="<?= $chapter->getId() ?>" type="button" class="btn btn-danger delChapter" data-toggle="modal" data-target="#confirmDelete">
                                <i class="fas fa-trash"></i>
                            </button>
                        </td>
                    </tr>

                     <?php endforeach ?>

                </tbody>
            </table>

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

            <div class="col-12 text-center mt-5">
                <a href="chapterBackend&amp;action=new" id="new" class="btn btn-success">
                    <i class="fas fa-plus"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('backend.php'); ?>