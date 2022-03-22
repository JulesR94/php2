<?php

include("config/config.inc.php");
include("model/pdo.inc.php");

try {
    $req = $pdo -> query('SELECT post_date,post_title,post_content, cat_descr
    FROM blog_posts
    
    INNER JOIN blog_users
    ON post_author = ID
    
    INNER JOIN blog_categories
    ON post_category = cat_id');
    
    // var_dump($req);
    // echo('Fin');
    //while ($data = $req ) {}
    $data = $req->fetchAll();
    // var_dump($data);

} catch (Exception $e) {
        die ('Erreur MySQL : ' . $e->getMessage());
}

$bg = 'assets/img/home-bg.jpg';
$title = "Blog de Sneakers";
$subtitle = "Sneaker Addict";

$title_art_1 = 'Planche de surf';
$subtitle_art_1 = 'Comment la choisir';
$author_art_1= 'Jules.R';
$date_art_1= 'Le 16 Mars 2022';
