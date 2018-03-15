<?php ob_start(); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12 mx-auto">

            <h2 class="text-center py-3">Liste des chapitres :</h2>

            <table id="chaptersTable" class="mx-auto">
                <thead class="text-center text-uppercase">
                    <tr>
                        <th>N°</th>
                        <th>Titre</th>
                        <th>Intro</th>
                        <th>Date</th>
                        <th>Editer</th>
                        <th>Supprimer</th>
                    </tr>
                </thead>

                <tbody>

                    <?php foreach ($chapters as $chapter) : ?>

                    <tr class="text-center">
                        <td><?= $chapter->getId() ?></td>
                        <td class="text-left font-weight-bold"><?= $chapter->getTitle() ?></td>
                        <td class="text-left"><?= $chapter->getIntro() ?></td>
                        <td><?= $chapter->getChapterDate() ?></td>
                        <td>
                            <a href="edit/<?= $chapter->getId() ?>" class="btn btn-primary">
                                <i class="fas fa-edit"></i>
                            </a>
                        </td>
                        <td>
                            <a href="delete&amp;id=<?= $chapter->getId() ?>" class="btn btn-danger">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>

                     <?php endforeach ?>

                </tbody>
            </table>

            <div class="col-12 text-center mt-5">
                <a href="new" id="new" class="btn btn-success">
                    <i class="fas fa-plus"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('backend.php'); ?>