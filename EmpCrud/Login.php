<?php
include("/xampp/htdocs/EmpCrud/db/dbconnection.php");

session_start();
if (isset($_SESSION["username"])) 
 {
 header("location:viewData.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-center">Login</div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="mb-3">
                                <label class="form-label">Username</label>
                                <input type="text" name="username" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <button type="submit" value="Login" name="LoginBtn" class="btn btn-primary w-100">Login</button>
                        </form>
                        <a href="signup.php">Not Registered Yet..? Click here to Sign Up</a>
                    </div>

                    <?php
                    if (isset($_POST["LoginBtn"])) {
                        $username = $_POST['username'];
                        $password = $_POST['password'];

                        $query = "select * from signup where username='$username' and password= '$password'";
                        $run = mysqli_query($con, $query);
                        $TotalRows = mysqli_num_rows($run);

                        if ($TotalRows > 0) {
                            $_SESSION['username'] = $username; //session created 
                            $_SESSION['last_time'] = time();
                            header('location:viewData.php');
                        }
                        else
                        {
                            echo"<script>Alert('username or Password is Incorrect..!'); </script>";
                        }}?>

                </div>
            </div>
        </div>
    </div>
</body>

</html>