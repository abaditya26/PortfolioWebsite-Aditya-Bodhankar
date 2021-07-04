<?php include "./header.php"; ?>
<?php
include "./database.php";
$query = "SELECT * FROM ipcount";
$result = mysqli_query($conn, $query);
$ipcount = 0;
if($result){
    $ipcount = mysqli_num_rows($result);
}else{
    echo "<script>colsole.log('ip count error');console.log(\"".mysqli_error($conn)."\");</script>";
}

$query = "SELECT SUM(`count`) FROM ipcount;";
$result = mysqli_query($conn, $query);
$visits = 0;
if($result){
    $visits = mysqli_fetch_row($result)[0];
}else{
    echo "<script>colsole.log('ip sum error');console.log(\"".mysqli_error($conn)."\");</script>";
}

$query = "SELECT COUNT(*) FROM projects";
$result = mysqli_query($conn, $query);
$projectCount = 0;
if($result){
    $projectCount = mysqli_fetch_row($result)[0];
}else{
    echo "<script>console.log(\"".mysqli_error($conn)."\");</script>";
}
?>
<div class="container" style="margin-top: 5%;">

    <div class="row">
        <div class="col-md-4">
            <center>
                <img src="./images/background.jpg" alt="Profile Image" style="max-height: 200px; max-width: 200px; object-fit: scale-down;" class="img-projects">
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
                            Total Posts
                            <br>
                            1
                            <br>
                            <a href="./posts.php" class="btn btn-outline-success">Manage Posts</a>
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
</div>
<?php include "./footer.php"; ?>