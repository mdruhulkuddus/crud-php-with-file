
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
                            <form action="insert.php" method="post" enctype="multipart/form-data" id="formRegistration">
                                <div class="mb-3">
                                    <label for="examplename" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="text" class="form-control" id="email" name="email">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                                <div class="mb-3">
                                    <label for="fileInput" class="form-label">Image</label>
                                    <input type="file" class="form-control" id="fileInput" name="file">
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary" id="btn-insert" name="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
<!--                    <button class=" mt-3 form-control btn btn-secondary read"> All student Info</button>-->
<!--                    <div class="card mt-2">-->
<!--                        <div class="card-body table-responsive">-->
<!--                            <table class="table table-striped table-hover">-->
<!--                                <thead>-->
<!--                                    <tr>-->
<!--                                        <th scope="col">SL</th>-->
<!--                                        <th scope="col">Name</th>-->
<!--                                        <th scope="col">Email</th>-->
<!--                                        <th scope="col">Password</th>-->
<!--                                        <th scope="col">Action</th>-->
<!--                                    </tr>-->
<!--                                </thead>-->
<!--                                <tbody id="tbody">-->
<!--                                    -->
<!--                                </tbody>-->
<!--                            </table>-->
<!--                        </div>-->
<!--                    </div>-->
                </div>
            </div>
            <div class="relod"></div>
        </section>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<!--    <script src="js/ajax.js"></script>-->
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>

