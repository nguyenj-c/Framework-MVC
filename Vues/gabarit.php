<?php

if (isset($_GET['url'])) {
    $url = $_GET['url'];
    $urlAction = explode('/', $url);
    if(isset($urlAction[1])) {
        $currentpage = ucfirst($urlAction[1]);
    } else {
        $currentpage = ucfirst($urlAction[0]);
    }
}
else
    $currentpage = 'Home';


echo '
<!doctype html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>' . ucfirst($currentpage) . '</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="' . Constantes::repertoireCSS() . 'main.css" rel="stylesheet" type="text/css" media="all" />
</head>';
       Vue::montrer('standard/entete'); 
       echo $A_vue['body'];
       Vue::montrer('standard/pied');
