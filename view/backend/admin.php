<?php ob_start(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-10 mx-auto">

            <h2 class="text-center">Liste des chapitres :</h2>

            <table>
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>Titre</th>
                        <th>Intro</th>
                        <th>Date</th>
                    </tr>
                </thead>

                <tbody>

                    <?php foreach ($chapters as $chapter) : ?>

                    <tr>
                        <td><?= $chapter->getId() ?></td>
                        <td><?= $chapter->getTitle() ?></td>
                        <td><?= $chapter->getIntro() ?></td>
                        <td><?= $chapter->getChapterDate() ?></td>
                    </tr>

                     <?php endforeach ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('backend.php'); ?>