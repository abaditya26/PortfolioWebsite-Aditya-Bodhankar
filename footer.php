</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>


<?php
if (!isset($_SESSION)) {
    session_start();
}
if (!isset($_SESSION['ipaddress'])) {
    // new visit
    $user_ip = $_SERVER['REMOTE_ADDR'];
    include "./database.php";
    $query = "SELECT count FROM ipcount WHERE ipaddress='$user_ip'";
    $result = mysqli_query($conn, $query);
    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            // revisit update query
            $count = 0;
            while ($row = mysqli_fetch_row($result)) {
                $count = $row[0];
            }
            $count = $count + 1;
            $query = "UPDATE ipcount SET count=$count WHERE `ipaddress` = '$user_ip'";
            if (!mysqli_query($conn, $query)) {
                echo "<script>console.log(\"" . mysqli_error($conn) . "\");</script>";
            }
        } else {
            // first visit insert query
            $query = "INSERT INTO ipcount(`ipaddress`, `count`) VALUES('$user_ip', 1)";
            if (!mysqli_query($conn, $query)) {
                echo "<script>console.log(\"" . mysqli_error($conn) . "\");</script>";
            }
        }
    }else{
        echo "<script>console.log(\"" . mysqli_error($conn) . "\");</script>";
    }

    $_SESSION['ipaddress'] = true;
}
?>