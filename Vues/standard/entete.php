<?php

if(!isset($_SESSION)){
    session_start();
}
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
    $currentpage = 'Login';

$Pages = array(
        "Home" => "Home",
);
echo '

<body>
    <header class="tete">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">HotHothot</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample05"
                aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <i class="navbar-toggler-icon"></i>
        </button>
        <nav class="navbar-collapse collapse show" id="navbarsExample05">';

foreach ($Pages as $key => $value){
    if($ctrl  = "Pages") {
        $var = "/Pages/" . lcfirst($key);
    }
    echo '<a href="'. $var .'">'.$value.'</a>';
}

echo '</nav>
    </nav>
    <h1 id="nomPage">' . ucfirst($currentpage) . '</h1>
   </header>';



