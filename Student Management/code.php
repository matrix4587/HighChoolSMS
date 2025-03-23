
<?php
session_start();
require("db_connect.php");

if (isset($_POST["update"])) {
    $student_id = mysqli_real_escape_string($conn, $_POST["student_id"]);
    $reg = mysqli_real_escape_string($conn, $_POST["reg"]);
    $photo = mysqli_real_escape_string($conn, $_POST["photo"]);
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
    $course = mysqli_real_escape_string($conn, $_POST["course"]);
    
    // Corrected UPDATE query
    $query = "UPDATE SET new_students reg='$reg', photo='$photo', name='$name', email='$email', phone='$phone', course='$course' WHERE id='$student_id'";
    $query_run = mysqli_query($conn, $query);
    if ($query_run) {
        $_SESSION["message"] = "Student Updated Successfully";
        header("Location:index.php");
        exit(0);
    } else {
        $_SESSION["message"] = "Student Not Updated!!"; 
        header("Location:index.php");
        exit(0);
    }
}

if (isset($_POST["save"])) {
    $reg = mysqli_real_escape_string($conn, $_POST["reg"]);
    $photo = mysqli_real_escape_string($conn, $_POST["photo"]);
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
    $course = mysqli_real_escape_string($conn, $_POST["course"]);

    // Corrected INSERT query
    $query = "INSERT INTO new_students (reg, photo, name, email, phone, course) VALUES ('$reg', '$photo', '$name', '$email', '$phone', '$course')";
    $query_run = mysqli_query($conn, $query);
    if ($query_run) {
        $_SESSION["message"] = "Student Added Successfully";
        header("Location:student-create.php");
        exit(0);
    } else {
        $_SESSION["message"] = "Student Not Added!!";
        header("Location:student-create.php");
        exit(0);
    }
}

?>