<?php
if(isset($_GET["id"])){
    
    include "./database.php";
    $query = "UPDATE `contact_us` SET `isRead` = '1' WHERE `contact_us`.`_id` = 3;";
    $result = mysqli_query($conn, $query);
    header('location:./dashboard.php');
}