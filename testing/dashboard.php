<?php

$dirs =  glob('*', GLOB_ONLYDIR);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing Server Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body style="background: rgba(1, 1, 1, 0.8); ">

    <center>
        <div style="margin-bottom: 20px;" class="header">
            <h1>Test Server</h1>
        </div>
        <div class="container">
            <table class="table table-hover">
                <tr>
                    <th>
                        #
                    </th>
                    <th>
                        Project Name
                    </th>
                </tr>
                <?php
                for ($i = 0; $i < sizeof($dirs); $i++) {
                ?>
                    <tr>
                        <td>
                            <?php echo $i + 1; ?>
                        </td>
                        <td>
                            <a href="<?php echo $dirs[$i]; ?>" class="btn" style="width:100%;color:white;text-align:left;"><?php echo $dirs[$i]; ?></a>
                        </td>
                    </tr>
                <?php
                }

                ?>
            </table>
        </div><br><br><br>
        <style>
            th {
                color: white;
            }

            td {
                color: white;
            }

            body {
                background: radial-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 1));
                color: white;
            }

            .container {
                width: auto;
                max-width: 680px;

            }

            .footer {
                background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.5));
                color: white;
                width: 100%;
                padding-top: 10px;
                position: fixed;
                bottom: 0;
            }
        </style>
        <footer class="footer mt-auto ">
            <div class="container">
                <span class="text-muted">
                    <p style="text-align: center;">
                    <small style="color: white;">Managed by:- <a href="https://www.adityabodhankar.me/" class="btn btn-a btn-sm" style="color: white;">Aditya Bodhankar</a></small>
                    </p>
                </span>
            </div>
        </footer>
    </center>
</body>

</html>