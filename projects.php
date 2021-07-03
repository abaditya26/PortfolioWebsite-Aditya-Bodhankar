<?php
include "./header.php";
$login = false;
if (isset($_SESSION['status'])) {
    if ($_SESSION['status'] == "admin") {
        $login = true;
    }
}
// INSERT INTO `projects`(`_id`, `title`, `description`, `link`, `cover`, `author`, `timestamp`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7])
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