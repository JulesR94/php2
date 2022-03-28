<?php

// Home model

include("config/config.inc.php"); //pour récupérer les valeurs de mysql
include("model/pdo.inc.php"); //test et connexion

try {
    $query = "
    SELECT post_ID, post_date, LEFT(post_content, " . TRONCATURE . ") AS post_content, post_title, display_name, cat_descr, post_img_url 
    FROM blog_posts 
    
    INNER JOIN blog_users
    ON post_author = ID
    
    INNER JOIN blog_categories
    ON post_category = cat_id
    
    ORDER BY post_date DESC"; // requêle sql:appel des elements dans la bdd

    $req = $pdo->query($query); // Execute la requête

    $data = $req->fetchAll(); // Récupére les données de la requête

} catch(Exception $e) {
    die("Erreur MySQL : " . $e->getMessage()); // Renvoie un message d'erreur si la requête n'a pu être effectuée
}

$bg = 'assets/img/home-bg.jpg'; 
$title = 'Blog de surf';
$subtitle = 'Le meilleur sport de glisse !'; //Definitions de plusieurs elements

/*
$title_art_1 = 'Planche de surf';
$subtitle_art_1 = 'Comment bien la choisir ?';
$author_art_1 = 'Philippe G.';
$date_art_1 = '17 Mars 2022';
*/