
<?php
if(isset($_POST['title'])){
    extract($_POST);

    if(!isset($_SESSION)){
        session_start();
    }

    $author = $_SESSION['name'];
    date_default_timezone_set("Asia/Kolkata");
    $timestamp=date("d-M-Y h:i:sa");
    $file_temp_loc=$_FILES['coverImage']['tmp_name'];
    $filestore="images\/projects\/".rand(10000000,999999999999).".jpg";
    move_uploaded_file($file_temp_loc,$filestore); 
    $image_path = $filestore;
    include "./database.php";
    $query = "INSERT INTO `projects`(`title`, `description`, `link`, `cover`, `author`, `timestamp`) VALUES ('$title','$description','$link','$image_path','$author','$timestamp')";
    $result = mysqli_query($conn, $query);
    if($result){
        echo "<script>alert('project added');document.location='./';</script>";
    }else{
        echo "<script>console.log(\"".mysqli_error($conn)."\");alert('project not added');document.location='./add-project.php';</script>";
    }
    exit;
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
    <form action="./add-project.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="title">Title Of Project</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Enter Title Of Project" required>
        </div><br>
        <div class="form-group">
            <label for="description">Description Of Project</label>
            <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="Enter Description Of Project"></textarea>
        </div><br>
        <div class="form-group">
            <label for="link">Link Of the Project</label>
            <input type="url" name="link" id="link" class="form-control" required placeholder="Enter URL of Site">
        </div><br>
        <div class="form-group">
            <label for="coverImage">Select Cover Image</label><br>
            <input type="file" name="coverImage" id="coverImage" required>
        </div><br>
        <div class="form-group">
            <input type="submit" value="Add Project" class="btn btn-success">
            <input type="reset" value="Reset Form" class="btn btn-danger">
        </div>
    </form>
</div>
<br>
<?php include "./footer.php"; ?>