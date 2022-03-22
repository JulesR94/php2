<?php include("view/layout/nav.inc.php");?>

<?php include("view/layout/header.inc.php");?>

<?php //var_dump($data);
//foreach ($data as $onedata) {
    //echo "Data : ";
    //var_dump($onedata);

?>
 <!-- Main Content-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">

            <?php foreach ($data as $onedata) { ?>

                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="post.php?article">
                            <h2 class="post-title"><?=$title_art_1?></h2>
                            <h3 class="post-subtitle"><?=$subtitle_art_1?></h3>
                        </a>
                        <p class="post-meta">
                            Rédigé par
                            <a href="#!"><?=$author_art_1?></a>
                            <?=$date_art_1?>
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />

            <?php } ?>

                    <!-- Pager-->
                    <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
                </div>
            </div>
        </div>
        <?php include("view/layout/footer.inc.php");?>