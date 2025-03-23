<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .wrapper {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .container {
            flex: 1;
        }
    </style>
</head>
<body">
    <div class="wrapper">
        <div class="bg-success p-3 sticky-top">
            <h2 class="text-light fw-bold">My School
                <a href="home.php" class="btn btn-light float-end px-4">Back</a>
            </h2>
        </div>
        <div class="container mt-4 col-md-6">
            <div class="row mt-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="fw-bold text-center">Student Login</h2>
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
                                    <button type="submit" name="login" class="text-center btn btn-primary px-5">Login</button>
                                </div>
                            </form>
                        </div>  
                    </div>
                    <div class=" mt-4 col-md-8">
                        <p>Dont have an account?
                        <a href="student-create.php" class="">Register</a>
                        <a class="float-end" href="">Forgot password</a></p>
                    </div>      
                </div>
            </div>
        </div>


        <div class=" mt-4">
            <?php include"footer.php"; ?>
        </div>
    </div>
    
   
</body>
</html>