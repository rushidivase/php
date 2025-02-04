<?php
include("/xampp/htdocs/EmpCrud/db/dbconnection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card p-4 shadow-lg">
                    <h3 class="text-center mb-4">SIGN UP FORM</h3>
                    <form action="" method="post" name="f">
                        <div class="mb-3">
                            <label class="form-label">First Name</label>
                            <input type="text" name="fname" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Last Name</label>
                            <input type="text" name="lname" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Gender</label>
                            <select name="gender" class="form-select">
                                <option value="">Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Age</label>
                            <input type="number" min="10" max="50" name="age" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" name="username" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Confirm Password</label>
                            <input type="password" name="confirmpassword" class="form-control" required>
                        </div>
                        <div class="text-center">
                            <input type="submit" name="SignupBtn" class="btn btn-primary" value="Sign Up">
                        </div>
                    </form>

                    <?php

                    if (isset($_POST["SignupBtn"])) {
                        $fname = $_POST["fname"];
                        $lname = $_POST["lname"];
                        $gender = $_POST["gender"];
                        $age = $_POST["age"];
                        $email = $_POST["email"];
                        $username = $_POST["username"];
                        $password = $_POST["password"];

                        $query = "insert into signup(fname,lname, gender, age, email, username, password) values('$fname', '$lname', '$gender', '$age', '$email', '$username', '$password')";
                        $result = mysqli_query($con, $query);

                        if ($result) {
                            echo "<script> alert('Registered Successfully..!')
        window.location.href='login.php';
        </script>";
                        } else {
                            echo "<script> alert('Registered Failed..!')
        </script>";
                        }
                    }

                    ?>

                </div>
            </div>
        </div>
    </div>
</body>

</html>