<?php
    session_start();
    $link = mysqli_connect("localhost", "admin", "admin", "db_pharm");
    $id_item = $_GET['item'];
    $id_user = $_SESSION['user_id'];
    $sql = "DELETE FROM trash WHERE id_user='$id_user' and id_item='$id_item'";
    $result = mysqli_query($link, $sql);
    header("location:Trash.php");
?>