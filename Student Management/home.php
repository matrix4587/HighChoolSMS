<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="assets/loginoptions.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="bg-success p-2 sticky-top">
        <div class="cotainer ">
            <div class="row">
                <div class="col-md-12 mx-auto mt-4 d-flex justify-content-between">
                    <div>
                        <p class="fw-bolder"><span class="fs-2 fw-bolder">Home Page</span></p>
                    </div>
                    <div class="float-end d-flex">
                        <div class="mx-1">
                            <div class="dropdown">
                                <button class="btn btn-primary" onclick="toggleDropdown()">Login</button>
                                <div class="dropdown-content">
                                    <a class="p-1 py-2" href="studentlogin.php">Student</a>
                                    <a class="p-1 py-2" href="adminlogin.php">Admin</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="dropdown">
                                <button class="btn btn-secondary" onclick="toggleDropdown()">SignUp</button>
                                <div class="dropdown-content mt-3 bg-success">
                                    <a class="p-1 py-2" href="studentlogin.php">Student</a>
                                    <a class="p-1 py-2" href="adminlogin.php">Admin</a>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
    <main class="h-100">

    </main>



    <div class=" mt-4">
        <?php include"footer.php"; ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="js.js"></script>


    
</body>
</html>