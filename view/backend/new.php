<?php ob_start(); ?>

<main>
    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto">
                <h2 class="text-center my-5">Nouveau Chapitre :</h2>

                <form action="/blog-alaska/index.php?url=chapterBackend&amp;action=addChapter" method="post" id="newChapterForm">
                    <div class="row">
                        <div class="form-group col-1 pr-0">
                            <label for="id">N°</label>
                            <input type="number" name="id" id="id" required="required" class="form-control">
                        </div>

                        <div class="form-group col-11">
                            <label for="title">Titre :</label><br>
                            <input type="text" placeholder="Titre" name="title" id="title" required="required" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="intro">Introduction :</label><br>
                        <input type="text" placeholder="Introduction" name="intro" id="intro" required="required" class="form-control">
                    </div>

                    <div>
                        <label>Contenu :</label>
                        <textarea name="content" class="tinyText"></textarea>
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