<?php include "./header.php"; ?>
<?php
include "./database.php";
$query = "SELECT * FROM ipcount";
$result = mysqli_query($conn, $query);
$ipcount = 0;
if($result){
    $ipcount = mysqli_num_rows($result);
}else{
    echo "ip count failed";
}

$query = "SELECT SUM(`count`) FROM ipcount;";
$result = mysqli_query($conn, $query);
$visits = 0;
if($result){
    $visits = mysqli_fetch_row($result)[0];
}else{
    echo "user count fail";
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
                            1
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
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
