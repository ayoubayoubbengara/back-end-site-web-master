<?php
$conn = mysqli_connect("localhost", "root", "", "test");

if($conn->connect_error){
    die("could not connect to the database!".$conn->connect_error);
}
?>