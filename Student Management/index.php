<?php 
    session_start();
    require "db_connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body class="bg-secondary">
    <div class="conteainer col-11">
        <h2 class="text-center text-light fw-bolder mt-2">Admin Dashboard
            <a href="home.php" class="btn btn-danger btn-sm float-end">Logout</a>
        </h2>
    </div>
    <div class="cotainer col-md-11 mt-2 mx-auto mb-5">
        <?php include'message.php' ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mt-2">
                            Year 1 Student Details
                            <a href="student-create.php" class="btn btn-success btn-sm float-end">Add Student</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Reg. No.</th>
                                    <th>Student Photo</th>
                                    <th>Student Name</th>
                                    <th>Email</th>
                                    <th>Phone No.</th>
                                    <th>Course</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $querry ="SELECT * FROM new_students";
                                $querry_run = mysqli_query($conn, $querry);
                                if(mysqli_num_rows($querry_run) > 0) {
                                    foreach($querry_run as $student) {
                                        ?>
                                        <tr>
                                            <td><?=$student['id']; ?></td>
                                            <td><?=$student['reg']; ?></td>
                                            <!--<td>
                                                <img src="<?=!empty($student['photo']) ? $student['photo'] : 'default-image.jpg'; ?>" 
                                                    alt="Student Photo" 
                                                    style="width: 100px; height: 100px; object-fit: cover;">
                                            </td>-->
                                            <td><img src=<?=!empty($student['photo']) ? $student['photo'] : 'default-image.jpg'; ?>" alt="Student Photo" style="width: 100px; height: 100px; object-fit: cover;"></td>
                                            <td><?=$student['name']; ?></td>
                                            <td><?=$student['email']; ?></td>
                                            <td><?=$student['phone']; ?></td>
                                            <td><?=$student['course']; ?></td>
                                            <td class="d-flex text-center">
                                                <a href="" class="btn btn-info btn-sm ">View</a>
                                                <a href="student-edit.php?id=<?=$student['id']; ?>" class="btn btn-success btn-sm mx-1">Edit</a>
                                                <a href="" class="btn btn-danger btn-sm ">Delete</a>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                }
                                ?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>
</html>