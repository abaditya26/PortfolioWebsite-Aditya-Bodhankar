<?php 
if(isset($_POST['name'])){
    include "./database.php";
    date_default_timezone_set("Asia/Kolkata");
    $timestamp = date("d-M-Y h:i:sa");
    $query = "INSERT INTO `contact_us`(`name`, `email`, `phoneNo`, `description`, `timestamp`) VALUES ('$name','$email','$phoneNo','$description','$timestamp')";
    $result = mysqli_query($conn, $query);
    if($result){
        echo "<script>alert('request sent');document.location='./';</script>";
    }else{
        echo "<script>alert('error to execute query');document.location='./';</script>";
    }
    exit;
}
?>

<?php include "./header.php"; ?>
<div class="container" style="max-width: 800px;">
    <form action="./contact-me.php" method="post">
    <center><br><br>
        <h4>
            Contact Me
        </h4>
    </center>
        <div class="form-group">
            <label for="name">Enter Your Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Enter Your Name" required>
        </div><br>
        <div class="form-group">
            <label for="email">Enter Your Email</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Enter Your Email" required>
        </div><br>
        <div class="form-group">
            <label for="phone">Enter Your Phone Number</label>
            <input type="tel" name="phoneNo" id="phoneNo" class="form-control" placeholder="Enter Your Phone Number" required>
        </div><br>
        <div class="form-group">
            <label for="description">Enter Description </label>
            <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="Enter The Description Here"></textarea>
        </div><br>
        <div class="form-group">
            <input type="reset" value="Reset Form" class="btn btn-danger">
            <input type="submit" value="Submit Data" class="btn btn-success">
        </div>

</form>
</div>
<?php include "./footer.php"; ?>
