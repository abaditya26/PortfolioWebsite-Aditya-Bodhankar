<?php
include "./header.php";
$login = false;
if (isset($_SESSION['status'])) {
    if ($_SESSION['status'] == "admin") {
        $login = true;
    }
}

include "./database.php";
$query = "SELECT * FROM projects";
$result = mysqli_query($conn, $query);
$projects = [];
if ($result) {
    while ($row = mysqli_fetch_row($result)) {
        array_push($projects, $row);
    }
} else {
    echo "<script>console.log('unable to fetch projects');console.log(\"" . mysqli_error($conn) . "\");</script>";
}

?>

<div class="container">
    <center>
        <br>
        <h3 class="font-styled-header">
            Projects
        </h3>
        <?php
        if ($login) {
            
            ?>
            <a href="./add-project.php" class="btn btn-outline-primary">Add New Project</a>
        <?php

}
?>
    </center>
<br>

    <div class="row">

        <?php
        for ($i = 0; $i < sizeof($projects); $i++) {
        ?>
            <div class="col-md-4" style="margin-bottom: 10px;">
                <div class="card" style="background-color: rgba(0,0,0,0.3);">
                    <div class="card-header">
                        <h5 class="card-title">
                            <?php echo $projects[$i][1]; ?>
                        </h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            <center>
                                <img src="<?php echo $projects[$i][4]; ?>" style="max-width: 100%; max-height: 300px;"><br><br>
                            </center>
                            <?php echo $projects[$i][2]; ?>
                            <!-- <center style='font-family: "SF Mono","Fira Code","Fira Mono","Roboto Mono",monospace;'>
                                <small>
                                HTML, CSS, JS
                                </small>
                            </center> -->
                        </p>
                        <a href="<?php echo $projects[$i][3]; ?>" target="_blank" class="btn btn-primary">Visit Project</a>
                        <?php if($login){
                            ?>
                            <a href="./edit-project.php?id=<?php echo $projects[$i][0]; ?>" class="btn btn-success">Edit Project</a>
                            <?php
                        } ?>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>


<?php include "./footer.php"; ?>