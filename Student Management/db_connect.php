<?php
$server = "localhost";
$username="root";
$password= "";
$dbname = "student_information";

$conn = mysqli_connect($server, $username, $password, $dbname);
if (mysqli_connect_errno()) {
    echo "". mysqli_connect_error();
}
?>