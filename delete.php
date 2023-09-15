<?php

    require_once("db_connect.php");
    $id = $_POST['id'];

    $infoByID = mysqli_fetch_assoc($mysqli->query("SELECT * FROM form WHERE id = $id"));
    $ImageByID = $infoByID['image'];
    if (file_exists("uploads/" . $ImageByID)) {
        unlink("uploads/" . $ImageByID);
    }

    $result = $mysqli->query("Delete FROM form WHERE id = $id");
    header("Location:index.php");