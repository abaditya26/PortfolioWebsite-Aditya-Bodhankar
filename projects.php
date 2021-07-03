<?php
include "./header.php";
$login = false;
if (isset($_SESSION['status'])) {
    if ($_SESSION['status'] == "admin") {
        $login = true;
    }
}

?>

<div class="container">
    <center>
        <br>
        <h3 class="font-styled-header">
            Projects
        </h3>
        <br>
        <?php
        if ($login) {

        ?>
            <a href="./add-project.php" class="btn btn-outline-primary">Add New Project</a>
        <?php

        }
        ?>
    </center>
</div>


<?php include "./footer.php"; ?>