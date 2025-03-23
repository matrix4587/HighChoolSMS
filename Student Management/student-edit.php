<?php
session_start();
require "db_connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body class="bg-secondary">
    <div class="container mt-5 col-md-8">
        <?php include("message.php"); ?>
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="fw-bold">Edit Student Information
                            <a href="index.php" class="btn btn-danger float-end px-4">Back</a>
                        </h2>
                        
                    </div>
                    <?php
                    // checking if id is present
                    if (isset($_GET['id'])) {
                        $student_id = mysqli_real_escape_string($conn, $_GET['id']);
                        $query = "SELECT * FROM new_students Where id= '$student_id'";
                        $query_run = mysqli_query($conn, $query);
                        // check if any row exist
                        if(mysqli_num_rows($query_run) > 0) {
                            $student = mysqli_fetch_array($query_run);
                            //print_r($student)
                            ?> 
                
                            <form action="code.php" method="post" class="p-4">
                            <div class="mb-3">
                                <input type="hidden" name="student_id" value="<?=$student['id']; ?>" class="form-control">
                                
                                <div class="mb-3">
                                    <label>Registration Number</label>
                                    <input type="text" name="reg" value="<?=$student['reg']; ?>" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label>Student Photo</label>
                                    <input type="file" name="photo" value="<?=$student['photo']; ?>" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label>Student Name</label>
                                    <input type="text" name="name" value="<?=$student['name']; ?>" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label>Student Email</label>
                                    <input type="text" name="email" value="<?=$student['email']; ?>" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label>Student Phone No.</label>
                                    <input type="text" name="phone" value="<?=$student['phone']; ?>" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label>Student Course</label>
                                    <input type="text" name="course" value="<?=$student['course']; ?>" class="form-control" required>
                                </div>
                                <button type="submit" name="update" class="btn btn-primary px-5">Update Student</button>
                            </form>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>