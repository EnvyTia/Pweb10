<?php

include("config.php");

if( isset($_GET['id']) ){

    $id = $_GET['id'];

    $sql = "DELETE FROM prospStudent WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if( $query ){
        header('Location: studentList.php');
    } else {
        die("failed to delete...");
    }

} else {
    die("access prohibited...");
}

?>