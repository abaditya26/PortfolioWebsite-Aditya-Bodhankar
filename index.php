<?php include "./header.php"; ?>
<?php
include "./database.php";
$query = "SELECT * FROM projects ORDER BY _id DESC LIMIT 3";
$result = mysqli_query($conn, $query);
$projects = [];
if ($result) {
    while ($row = mysqli_fetch_row($result)) {
        array_push($projects, $row);
    }
} else {
    echo "error";
}
?>
<div class="container">
    <img id="tilt" class="rounded-circle d-block mx-auto m-3 aos-init aos-animate" src="./images/background.jpg" height="256" width="256" data-aos="zoom-in-up">
    <br>
    <center>
        <h3 class="font_4">
            Aditya Ashok Bodhankar
        </h3>
        <br>
        <a class="btn" target="_blank" href="https://www.instagram.com/ab_aditya_26">
            <img src="./images/insta.png" style="max-width: 40px;">
        </a>
        <a class="btn" target="_blank" href="https://www.facebook.com/aditya.bodhankar.90/">
            <img src="./images/fb.png" style="max-width: 40px;">
        </a>
        <a class="btn" target="_blank" href="https://wa.me/917057974721">
            <img src="./images/whatsapp.png" style="max-width: 40px;">
        </a>
        <a class="btn" target="_blank" href="https://t.me/ab_aditya_26">
            <img src="./images/telegram.png" style="max-width: 40px;">
        </a>
        <a class="btn" target="_blank" href="https://github.com/abaditya26">
            <svg class="octicon octicon-mark-github v-align-middle" height="40" viewBox="0 0 16 16" version="1.1" width="40" aria-hidden="true" fill="white">
                <path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"></path>
            </svg>
        </a>
        <br>
    </center>
    <hr class="hr" style="border-color: white;">
    <br><br>
    <section id="projects" style="padding-top: 20px; padding-bottom: 20px;">
        <div class="container">
            <center>
                <h2 style="font-family: Impact, Chrcoal, sans-serif;">
                    <svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-file-earmark-zip-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M2 3a2 2 0 0 1 2-2h.5v1h1v1h-1v1h1v1h-1v1h1v1H7V6H6V5h1V4H6V3h1V2H6V1h3.293a1 1 0 0 1 .707.293L13.707 5a1 1 0 0 1 .293.707V13a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V3zm7 2V2l4 4h-3a1 1 0 0 1-1-1zM5.5 7.5a1 1 0 0 0-1 1v.938l-.4 1.599a1 1 0 0 0 .416 1.074l.93.62a1 1 0 0 0 1.109 0l.93-.62a1 1 0 0 0 .415-1.074l-.4-1.599V8.5a1 1 0 0 0-1-1h-1zm0 1.938V8.5h1v.938a1 1 0 0 0 .03.243l.4 1.598-.93.62-.93-.62.4-1.598a1 1 0 0 0 .03-.243z"></path>
                    </svg>
                    Recent Project

                </h2><br><br>


                <?php for ($i = 0; $i < sizeof($projects); $i++) { ?>
                    <?php if ($i % 2 == 0) {
                    ?>
                        <div class="row" style="margin-top: -2.5px; margin-left: 25px; margin-right: 10px; border-top-right-radius: 10px;border-bottom-right-radius: 10px; padding:20px; border-right: dotted; border-top:dotted;border-bottom:dotted;">
                            <div class="col-md-6">
                                <div class="from-left slide-in disappear">
                                    <img src="<?php echo $projects[$i][4]; ?>" class="img-projects" style="border: inset; border-radius: 10px; object-fit: contain;">
                                </div>
                            </div>
                            <div class="col-md-6 from-right slide-in disappear" style="padding-top:20px">
                                <h5 class="">
                                    <?php echo $projects[$i][1]; ?>
                                </h5>
                                <p class="">
                                    <?php echo $projects[$i][2]; ?>
                                    <br><br>
                                    <a href="<?php echo $projects[$i][3]; ?>" class="btn btn-outline-success">Visit Site</a>
                                </p>
                            </div>
                        </div>
                    <?php
                    } else {
                    ?>
                        <div class="row" style="margin-top: -2.5px; margin-left: 10px; margin-right: 25px; border-bottom-left-radius: 10px; border-top-left-radius: 10px; padding:20px; border-left: dotted;border-top:dotted;border-bottom:dotted;">
                            <div class="col-md-6 from-right slide-in disappear" style="padding-top:20px">
                                <h5 class="">
                                    <?php echo $projects[$i][1]; ?>
                                </h5>
                                <p class="">
                                    <?php echo $projects[$i][2]; ?>
                                    <br><br>
                                    <a href="<?php echo $projects[$i][3]; ?>" class="btn btn-outline-success">Visit Site</a>
                                </p>
                            </div>
                            <div class="col-md-6">
                                <div class="from-right slide-in disappear">
                                    <img src="<?php echo $projects[$i][4]; ?>" class="img-projects" style="border: inset; border-radius: 10px; object-fit: contain;">
                                </div>
                            </div>
                        </div>
                    <?php
                    } ?>
                <?php } ?>

                <br>
                <a href="./projects.php" class="btn btn-outline-light">
                    + View More
                </a>
            </center>
        </div>
    </section>

    <hr style="height:2px;border-width:2;color:white;background-color:white">
</div>
<?php include "./footer.php"; ?>

<script>
    function openfile(f) {
        document.location = f;
    }
</script>