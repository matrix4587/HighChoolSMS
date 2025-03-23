<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body">
    <div class="bg-secondary p-2 sticky-top">
        <h2 class="fw-bold text-light">My School
            <a href="home.php" class="btn btn-light float-end px-4">Back</a>
        </h2>
    </div>
    <div class="container mt-5 col-md-6">
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="fw-bold text-center">Admin Login</h2>
                    </div>
                    <div>
                        <form action="code.php" method="post" class="p-4">
                            <div class="mb-3">
                                <div class="mb-3">
                                    <label>Username</label>
                                    <input type="name" name="name" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control" required>
                                </div>
                                <button type="submit" name="login" class="btn btn-secondary px-5">Login</button>
                            </div>
                        </form>
                    </div>  
                </div>  
                <div class=" mt-4">
                    <p>Dont have an account?
                    <a href="student-create.php" class="">Register</a>
                    <a class="float-end" href="">Forgot password</a></p>
                </div>    
            </div>
        </div>
    </div>


    <div class="bottom-0">
         <?php include"footer.php"; ?>
    </div>
   
</body>
</html>