<?php
if(isset($_POST['email'])){
    extract($_POST);
    include "./database.php";
    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $query);
    if($result){
        if(mysqli_num_rows($result)==1){
            echo "user exists";
            session_start();
            $_SESSION['status'] = "admin";
            $_SESSION['email'] = $email;
            $_SESSION['name'] = mysqli_fetch_row($result)[3];
            header('location:./dashboard.php');
        }else{
            echo "user not exists";
        }
    }else{
        echo "<script>console.log(\"".mysqli_error($conn)."\");alert('query execution failed. check console.')</script>";
    }
    exit;
}
?>
<?php include "./header.php"; ?>
    <br><br>
    <main class="form-signin">
        <form action="login.php" method="POST">
            <center>
                <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                </svg>
            </center>
            <br>
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <div class="form-floating">
                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" autocomplete="off">
                <label for="email">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                <label for="password">Password</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        </form>
    </main>


    <?php include "./footer.php"; ?>