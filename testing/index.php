<?php
session_start();
if(isset($_SESSION['login'])){
    if($_SESSION['login']=="true"){
        header('location:./dashboard.php');
    }
}
if (isset($_POST['email'])) {
    include "./database.php";
    extract($_POST);
    $query = "SELECT * FROM testingusers WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $query);
    if($result){
        if(mysqli_num_rows($result)>0){
            $row = mysqli_fetch_row($result);
            $_SESSION['login']="true";
            $_SESSION['email']=$email;
            $_SESSION['name']=$row[1];
            $_SESSION['id']=$row[2];
            header('location:./dashboard.php');
        }else{
            echo "<script>alert('invalid credentials');document.location='./';</script>";
        }
    }else{
        echo "query execution failed";
    }
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing Server Login</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <style>
        html {
            scroll-behavior: smooth;
        }

        * {
            color: white;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            background: rgba(1, 1, 1, 0.8);
            /* Used if the image is unavailable */
            background-position: center;
            /* Center the image */
            background-attachment: fixed;
            background-repeat: no-repeat;
            /* Do not repeat the image */
            background-size: cover;
            /* Resize the background image to cover the entire container */
            color: #FFFFFF;
        }

        .form-floating label {
            color: black;
        }

        .form-signin {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: auto;
        }

        .form-signin .checkbox {
            font-weight: 400;
        }

        .form-signin .form-floating:focus-within {
            z-index: 2;
        }

        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .footer {
            padding: 10px;
            background: rgba(1, 1, 1, 0.8);
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body style="background: rgba(1, 1, 1, 0.8); ">
    <main class="form-signin">
    <br><br><br><br><br>
        <form action="./index.php" method="POST">
            <center>
                <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                </svg>
            </center>
            <br>
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
            <div class="form-floating">
                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" autocomplete="off" required>
                <label for="email">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        </form>
    </main>
</body>

</html>