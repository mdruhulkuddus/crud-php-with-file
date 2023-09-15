<?php

require_once("db_connect.php");

if(isset($_POST['submit'])){
   $name = $_POST['name'];
   $email = $_POST['email'];
   $password = $_POST['password'];

   //image upload print_r($_FILES);

    if($_FILES['file']['error'] == 0) {
        $fileName = $_FILES['file']['name'];
        $tmpName = $_FILES['file']['tmp_name'];
        $validImageExtension = ['jpg', 'jpeg', 'png'];
        $file_extension = pathinfo($fileName, PATHINFO_EXTENSION);
        $newFileName = uniqid() . "-" . $fileName;

        if (in_array(strtolower($file_extension), $validImageExtension)) {
            $uplodLoc = 'uploads/' . $newFileName;
            move_uploaded_file($tmpName, $uplodLoc);
        }
        else {
            echo "
         <script>
            alert('Invalid Image Extension!'); 
            document.location.href = 'add.php';
         </script>
        ";

            exit();
        }
    }
    $result  = $mysqli->query("INSERT INTO `form`(`name`, `email`, `password`, `image`) VALUES ('$name', '$email', '$password','$newFileName')");
    if ($result) {
        echo "
        <script>alert('user added successfully!'); document.location.href = 'index.php';</script>
        ";
    } else {
        echo "Error: " . $mysqli->error;
    }

}