<?php
include "./header.php";
if (isset($_SESSION['status'])) {
    if ($_SESSION['status'] != "admin") {
        echo "<script>document.location='./';</script>";
    }
} else {
    echo "<script>document.location='./';</script>";
}
if (isset($_GET["id"])) {
    extract($_GET);
} else {
    echo "<script>document.location='./dashboard.php';</script>";
}
include "./database.php";
$query = "SELECT * FROM contact_us WHERE _id=$id";
$result = mysqli_query($conn, $query);
$data = [];
if ($result) {
    $data = mysqli_fetch_row($result);
} else {
    echo "<script>alert('error to get data');document.location='./dashboard.php';</script>";
}
?>

<div class="container" style="margin-top: 1%; ">
    <center>
        <h2>
            Contact Request for <?php echo $id ?>
        </h2>
        <table class="table table-stripped table-hovered table-bordered" style="max-width: 800px;">
            <tr>
                <th>
                    Name
                </th>
                <td>
                    <?php echo $data[1]; ?>
                </td>
            </tr>
            <tr>
                <th>
                    Email
                </th>
                <td>
                    <?php echo $data[2]; ?>
                </td>
            </tr>
            <tr>
                <th>
                    Phone
                </th>
                <td>
                    <?php echo $data[3]; ?>
                </td>
            </tr>
            <tr>
                <th>
                    Description
                </th>
                <td>
                    <?php echo nl2br($data[4]); ?>
                </td>
            </tr>
            <tr>
                <th>
                    TimeStamp
                </th>
                <td>
                    <?php echo $data[5]; ?>
                </td>
            </tr>
            <tr>
                <th>
                    Read
                </th>
                <td>
                    <?php echo $data[6]==0? "No" : "Yes"; ?>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <center>
                        <a href="mailto:<?php echo $data[2]; ?>" class="btn btn-outline-success">Reply</a>
                        <?php if ($data[6] == 0) {  
                        ?>
                            <a href="#" class="btn btn-outline-primary" onclick="markAsRead('<?php echo $data[0]; ?>')">Mark as read</a>
                        <?php
                        } else {
                        ?>
                            <a href="#" class="btn btn-outline-primary disabled">Already Read</a>
                        <?php
                        } ?>
                    </center>
                </td>
            </tr>
        </table>
    </center>
</div>
<?php include "./footer.php"; ?>