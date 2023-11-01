<?php

include("config.php");

if(isset($_POST['save'])){

    $name = $_POST['name'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $religion = $_POST['religion'];
    $schoolOrigin = $_POST['schoolOrigin'];

    $sql = "UPDATE prospStudent SET name='$name', address='$address', gender='$gender', religion='$religion', schoolOrigin='$schoolOrigin' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: studentList.php');
    } else {
        die("Failed to save changes...");
    }


} else {
    die("Access prohibited...");
}

?>