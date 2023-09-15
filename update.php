<?php
    require_once("db_connect.php");
//print_r($_FILES['file']['error']);
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $previousImage = $_POST['previousImage'];


    if($_FILES['file']['error'] == 0){

        if (file_exists("uploads/" . $previousImage)) {
//            echo "asci boss\n"; echo $previousImage;
            unlink("uploads/" . $previousImage);
        }

        $fileName = $_FILES['file']['name'];
        $tmpName = $_FILES['file']['tmp_name'];
        $newFileName = uniqid(). "-" .$fileName;
        move_uploaded_file($tmpName, 'uploads/'. $newFileName);
        $result = $mysqli->query("UPDATE `form` SET image = '$newFileName' WHERE id = $id");
    }

    $result = $mysqli->query("UPDATE `form` SET `name`='$name',`email`='$email',`password`='$password' WHERE id = $id");
    header("Location:index.php");