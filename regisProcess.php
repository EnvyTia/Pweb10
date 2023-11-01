<?php

include("config.php");

if(isset($_POST['register'])){

    $name = $_POST['name'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $agama = $_POST['agama'];
    $schoolOrigin = $_POST['schoolOrigin'];

    $sql = "INSERT INTO prospStudent (name, address, gender, agama, schoolOrigin) VALUE ('$name', '$address', '$gender', '$agama', '$schoolOrigin')";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: index.php?status=success');
    } else {
        header('Location: index.php?status=failed');
    }


} else {
    die("Access prohibited...");
}

?>