    <?php 
    // die($_GET['article']);

    // var_dump($_GET);
    // exit;
    // echo($_GET['article']);

    // Ce controller doit recevoir un parametre article
    if (!isset($_GET["article"])) {
        die("Manque paramètre !");
}
    include("model/post1.model.php");

    $layout_title = $title;

    include("view/post1.view.php");

        
