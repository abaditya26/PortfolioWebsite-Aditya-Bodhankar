<?php
session_start();
if (isset($_SESSION['status'])) {
    if ($_SESSION['status'] != "admin") {
        echo "<script>document.location='./';</script>";
    }
} else {
    echo "<script>document.location='./';</script>";
}


if (isset($_POST['title'])) {
    extract($_POST);

    if (!isset($_SESSION)) {
        session_start();
    }

    include "./database.php";
    $query = "UPDATE projects SET title = '$title', description='$description', link='$link' WHERE _id=$id";
    $result = mysqli_query($conn, $query);
    if ($result) {
        echo "<script>alert('project updated');document.location='./projects.php';</script>";
    } else {
        echo "<script>console.log('edit fail');console.log(\"" . mysqli_error($conn) . "\");</script>";
    }
    exit;
}
$id = "-1";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    echo "<script>document.location='./';</script>";
    exit;
}
include "./database.php";
$query = "SELECT * FROM projects WHERE _id=$id";
$result = mysqli_query($conn, $query);
$projectData = [];
if ($result) {
    while ($row = mysqli_fetch_row($result)) {
        $projectData = $row;
    }
} else {
    echo "<script>console.log('edit fetch fail');console.log(\"" . mysqli_error($conn) . "\");</script>";
}
?>
<?php include "./header.php"; ?>
<div class="container" style="max-width: 800px;">
    <br>
    <center>
        <h3>
            Add Project
        </h3>
    </center>
    <form action="./edit-project.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="id">Id Of Project</label>
            <input type="text" name="id" id="id" class="form-control" value="<?php echo $projectData[0]; ?>" required readonly>
        </div><br>
        <div class="form-group">
            <label for="title">Title Of Project</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Enter Title Of Project" value="<?php echo $projectData[1]; ?>" required>
        </div><br>
        <div class="form-group">
            <label for="description">Description Of Project</label>
            <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="Enter Description Of Project"><?php echo $projectData[2]; ?></textarea>
        </div><br>
        <div class="form-group">
            <label for="link">Link Of the Project</label>
            <input type="url" name="link" id="link" class="form-control" required placeholder="Enter URL of Site" value="<?php echo $projectData[3]; ?>">
        </div><br>
        <div class="form-group">
            <input type="submit" value="Update Project Data" class="btn btn-success">
            <input type="reset" value="Reset Form" class="btn btn-danger">
        </div>
    </form>
</div>
<br>
<?php include "./footer.php"; ?>