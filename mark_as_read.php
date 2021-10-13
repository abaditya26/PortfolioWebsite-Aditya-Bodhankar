<?php
if(isset($_GET["id"])){
    extract($_GET);
    include "./database.php";
    $query = "UPDATE `contact_us` SET `isRead` = '1' WHERE _id = $id;";
    echo $query;
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    header('location:./dashboard.php');
}