<?php

$conn = mysqli_connect("localhost", "root", "", "test");

if($conn->connect_error){
    die("could not connect to the database!".$conn->connect_error);
}
if(isset($_POST['add'])){
    $title=$_POST['title'];
    $dat=$_POST['dat'];
    $paragraph=$_POST['paragraph'];
    $photo=$_FILES['image']['name'];
    $upload="uploads/".$photo;
    
    $query="INSERT INTO crud(photo, title, dat, paragraph) VALUES('$upload','$title','$dat','$paragraph')";
    $stmt=$conn->prepare($query);
    //$stmt->bind_param('ssss',$upload,$title,$dat,$paragraph);
    $stmt->execute();
    move_uploaded_file($_FILES['image']['tmp_name'], $upload);
    header('location:index.php');
}
?>