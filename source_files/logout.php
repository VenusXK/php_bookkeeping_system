<?php 
    session_start();
    session_destroy();
    $url = "page1Index2.php";
    header('location:'.$url);

?>