<?php ob_start(); ?>

<main>
    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto">
                <h2 class="text-center my-5">Nouveau Chapitre :</h2>

                <form action="/blog-alaska/index.php?url=admin&amp;action=editChapter&amp;id=<?= $chapter->getId() ?>" method="post" id="newChapterForm">
                    <div class="row">
                        <div class="form-group col-1 pr-0">
                            <label for="id">N°</label>
                            <input type="number" name="id" id="id" required="required" class="form-control" value="<?= $chapter->getId() ?>">
                        </div>

                        <div class="form-group col-11">
                            <label for="title">Titre :</label><br>
                            <input type="text" placeholder="Titre" name="title" id="title" required="required" class="form-control" value="<?= $chapter->getTitle() ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="intro">Introduction :</label><br>
                        <input type="text" placeholder="Introduction" name="intro" id="intro" required="required" class="form-control" value="<?= $chapter->getIntro() ?>">
                    </div>

                    <div>
                        <label>Contenu :</label>
                        <textarea name="content"><?= $chapter->getArticle() ?></textarea>
                    </div>

                    <div class="form-group py-3 d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<?php $content = ob_get_clean(); ?>

<?php require('backend.php'); ?>