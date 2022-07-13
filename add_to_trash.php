<?php
    session_start();
    $link = mysqli_connect("localhost", "admin", "admin", "db_pharm");
    $id_item = $_GET['item'];
    $id_user = $_SESSION['user_id'];
    $sql = "INSERT INTO `trash` (`id_user`, `id_item`, `added`) VALUES ('$id_user', '$id_item', current_timestamp())";
    $result = mysqli_query($link, $sql);
    header("location:index.php");
?>