<?php
require_once("db_connect.php");
//$mysqli = new mysqli('localhost', 'root', '', 'reginfo');
$result = $mysqli->query("SELECT * FROM form ORDER BY id DESC;");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css"/>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<div class="container">
    <section class=" mt-4 p-0-135">
        <div class="col-md-12">
            <button class="btn btn-secondary read"> All student Info</button>
            <a href="add.php" class="btn btn-outline-primary">Add</a>
            <div class="card mt-2">
                <div class="card-body table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th scope="col">SL</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Image</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody id="tbody">

                        <?php $i = 0; foreach ($result as $data ) { ?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $data['name']; ?></td>
                                <td><?php echo $data['email']; ?></td>
                                <td><img src="uploads/<?php echo $data['image'] ?>" width="60" height="50" alt="img"></td>
                                <td>
                                    <form action="delete.php" method="post" style="display: inline" onsubmit="return confirm('Are you sure to delete this info ?')">
                                        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                                    <button class="btn btn-outline-danger">Delete</button>
                                    </form>
                                    <a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-outline-success">Edit</a>

                                </td>
                            </tr>

                            <?php } ?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>