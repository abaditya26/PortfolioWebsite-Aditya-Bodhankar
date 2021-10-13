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

$query = "SELECT * FROM `contact_us` ORDER BY _id DESC";
$result = mysqli_query($conn, $query);
$contactRequests = [];
if ($result) {
    while ($row = mysqli_fetch_row($result)) {
        array_push($contactRequests, $row);
    }
} else {
    echo "<script>console.log(\"" . mysqli_error($conn) . "\");</script>";
}

?>

<div class="container" style="margin-top: 2%;">
    <center>
        <h2>
            Contact Requests
        </h2>
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
            <?php if (sizeof($contactRequests) == 0) {
            ?>
                <tr>
                    <td colspan="4" class="text-center">
                        <h2>No Requests currently</h2>
                    </td>
                </tr>
            <?php
            }

            for ($i = 0; $i < sizeof($contactRequests); $i++) { ?>
                <tr>
                    <td class="text-center">
                        <?php echo $i + 1; ?>
                    </td>
                    <td class="text-center">
                        <?php echo $contactRequests[$i][1]; ?>
                    </td>
                    <td class="text-center">
                        <?php echo $contactRequests[$i][5]; ?>
                    </td>
                    <td class="text-center">
                        <a href="#" class="btn btn-outline-success">View Request</a>
                        <?php if ($contactRequests[$i][6] == 0) {
                        ?>
                            <a href="#" class="btn btn-outline-primary" onclick="markAsRead('<?php echo $contactRequests[$i][0]; ?>')">Mark as read</a>
                        <?php
                        } else {
                        ?>
                            <a href="#" class="btn btn-outline-primary disabled">Already Read</a>
                        <?php
                        } ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php
include "./footer.php";
?>