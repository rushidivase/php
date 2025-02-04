<?php

if (isset($_POST["submitbtn"])) {
    include("/xampp/htdocs/EmpCrud/db/dbconnection.php");

    $name = $_POST['name'];
    $age = $_POST['age'];
    $salary = $_POST['salary'];
    $mono = $_POST['mono'];

    $image_name = $_FILES['ImageUpload']['name'];
    $image_size = $_FILES['ImageUpload']['size'];
    $image_type = $_FILES['ImageUpload']['type'];
    $temp_name = $_FILES['ImageUpload']['tmp_name'];

    $folder = "Images/";

    if ($image_size <= 1000000) //1mb
    {
        $folder = "Images/" . $image_name;
        $query = "insert into employee(name, age, salary, mono, image_path) values('$name', '$age', '$salary', '$mono', '$folder')";
        $result = mysqli_query($con, $query);
        if ($result)
        {
            move_uploaded_file($temp_name, $folder);
        } else
        {
            echo "Failed..!";
        }
    }
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
        <form action="#" method="post" enctype="multipart/form-data">
            <input type="text" name="name" placeholder="Enter Name:" class="form-control mt-2 mb-2">

            <input type="text" name="age" placeholder="Enter Age:" class="form-control mb-2">

       
            <input type="text" name="salary" placeholder="Enter Salary:" class="form-control mb-2">

        
            <input type="text" name="mono" placeholder="Enter Mobile Number:" class="form-control mb-2">

            Upload Image:
            <input type="file" name="ImageUpload" required class="form-control mb-2">

            <input type="submit" value="insert" class="btn btn-info w-100" name="submitbtn">
        </form>
    </div>
</body>



</html>