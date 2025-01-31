<?php

if (isset($_POST["submitbtn"])) {
    include("/xampp/htdocs/EmpCrud/db/dbconnection.php");

    $name = $_POST['name'];
    $age = $_POST['age'];
    $salary = $_POST['salary'];
    $mono = $_POST['mono'];

    $query = "insert into employee(name, age, salary, mono) values('$name', '$age', '$salary', '$mono')";
    $run = mysqli_query($con, $query);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="col-5 offset-4 mt-3 border shadow p-3">
        <h3 class="fs-3 text-center">Insert Record</h3>
        <form action="#" method="post">
            Enter Name:
            <input type="text" name="name"><br><br>

            Enter Age:
            <input type="text" name="age"><br><br>

            Enter Salary:
            <input type="text" name="salary"><br><br>

            Enter Mobile No:
            <input type="text" name="mono"><br><br>

            <input type="submit" value="insert" class="btn btn-info w-100" name="submitbtn">
        </form>
    </div>
</body>



</html>