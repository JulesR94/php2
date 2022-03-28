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

    $bg = $data["post_img_url"];
    $layout_title = $data["post_title"];
    $header_title = substr($data["post_title"], 0, TRONCATURE_HEADER) . '...';
    $header_subtitle = '...' . substr($data["post_title"], TRONCATURE_HEADER);

    include("view/post1.view.php");

        
