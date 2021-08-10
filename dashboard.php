<?php
include "./header.php";
if (isset($_SESSION['status'])) {
    if ($_SESSION['status'] != "admin") {
        echo "<script>document.location='./';</script>";
    }
} else {
    echo "<script>document.location='./';</script>";
}
include "./database.php";
$query = "SELECT * FROM ipcount";
$result = mysqli_query($conn, $query);
$ipcount = 0;
if ($result) {
    $ipcount = mysqli_num_rows($result);
} else {
    echo "<script>colsole.log('ip count error');console.log(\"" . mysqli_error($conn) . "\");</script>";
}
$query = "SELECT SUM(`count`) FROM ipcount;";
$result = mysqli_query($conn, $query);
$visits = 0;
if ($result) {
    $visits = mysqli_fetch_row($result)[0];
} else {
    echo "<script>colsole.log('ip sum error');console.log(\"" . mysqli_error($conn) . "\");</script>";
}
$query = "SELECT COUNT(*) FROM projects";
$result = mysqli_query($conn, $query);
$projectCount = 0;
if ($result) {
    $projectCount = mysqli_fetch_row($result)[0];
} else {
    echo "<script>console.log(\"" . mysqli_error($conn) . "\");</script>";
}
?>
<div class="container" style="margin-top: 5%;">

    <div class="row">
        <div class="col-md-4">
            <center>
                <img src="./images/profile.jpg" alt="Profile Image" style="border-radius: 50% ; border: inset; max-height: 200px; max-width: 200px; object-fit: scale-down;" class="img-projects">
                <br>
                <br>
                <h4>
                    Aditya Bodhankar
                </h4>
            </center>
        </div>
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-6" style="margin-top: 5%;">
                    <center>
                        <h3>
                            Total Projects
                            <br>
                            <?php echo $projectCount; ?>
                            <br>
                            <a href="./projects.php" class="btn btn-outline-success">Manage Projects</a>
                        </h3>
                    </center>
                </div>
                <div class="col-md-6" style="margin-top: 5%;">
                    <center>
                        <h3>
                            Total Requests
                            <br>
                            1
                            <br>
                            <a href="./requests.php" class="btn btn-outline-success">Manage Requests</a>
                        </h3>
                    </center>
                </div>
                <div class="col-md-6" style="margin-top: 5%;">
                    <center>
                        <h3>
                            Total Visits
                            <br>
                            <?php echo $visits; ?>
                        </h3>
                    </center>
                </div>
                <div class="col-md-6" style="margin-top: 5%;">
                    <center>
                        <h3>
                            Total Unique Visitors
                            <br>
                            <?php echo $ipcount; ?>
                        </h3>
                    </center>
                </div>
            </div>
        </div>
    </div>
    <hr class="hr">
    <div class="container">
        <center>
            <h3>
                Recent Requests
            </h3>
        </center>
        <hr class="hr">
        <table class="table table-stripped">
            <thead>
                <th class="text-center">
                    #
                </th>
                <th class="text-center">
                    Name
                </th>
                <th class="text-center">
                    Time Stamp
                </th>
                <th class="text-center">
                    Action
                </th>
            </thead>
            <tbody>
                <?php for ($i = 0; $i < 5; $i++) { ?>
                    <tr>
                        <td class="text-center">
                            1
                        </td>
                        <td class="text-center">
                            Name Here
                        </td>
                        <td class="text-center">
                            time stamp here
                        </td>
                        <td class="text-center">
                            <a href="#" class="btn btn-outline-success">View Request</a>
                            <a href="#" class="btn btn-outline-primary">Mark as read</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <center>
            <a href="#" class="btn btn-success">View All</a>
        </center>
    </div>
    <hr class="hr">
</div>
<?php include "./footer.php"; ?>