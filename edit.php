<?php
require_once("db_connect.php");
$id = $_GET['id'];
$result = mysqli_fetch_assoc($mysqli->query("SELECT * FROM form WHERE id = $id"));
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<div class="container">
    <section class=" mt-4 p-0-135">
        <div class="col-md-12">
            <!-- <h3> <strong id="message"></strong> </h3> -->
            <div class="alert alert-warning alert-dismissible fade <?php echo !empty($message) ? 'show' : ''; ?>" role="alert">
                <span id="message"></span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>

        <div class="row ">
            <div class="col-md-12">
                <div class="card">
                    <h3 class="card-title mt-3 mx-auto ">Registration Info</h3>
                    <div class="card-body">
                        <form action="update.php" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="examplename" class="form-label">Name</label>
                                <input type="hidden" id="id" name="id" value="<?php echo $result['id'] ?>">
                                <input type="text" class="form-control" id="name" name="name" value="<?php echo $result['name'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="text" class="form-control" id="email" name="email" value="<?php echo $result['email'] ?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" value="<?php echo $result['password'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="fileInput" class="form-label">Image</label> <br>
                                <img src="uploads/<?php echo $result['image'] ?>" width="60" height="50" alt="no img">
                                <input type="hidden" name="previousImage" value="<?php echo $result['image'] ?>">
                                <input type="file" class="form-control" id="fileInput" name="file">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary" id="btn-insert" name="submit">Update</button>
                            </div>
                        </form>
                    </div>
                </div>

    </section>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<!--    <script src="js/ajax.js"></script>-->
<script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>


