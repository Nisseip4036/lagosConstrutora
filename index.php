<?php

$rota = (isset($_GET['url'])) ? $_GET['url'] : 'home';
$rota_item = explode("/", $rota);

if(file_exists("pages/".$rota_item[0].".php")) {
    include "pages/".$rota_item[0].".php";
} else {
    include "pages/404.php";
}

?>