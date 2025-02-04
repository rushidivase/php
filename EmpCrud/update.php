<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

    <?php
include("/xampp/htdocs/EmpCrud/db/dbconnection.php");
    $id = $_GET['id'];
    $query = "select * from employee where eid='$id'";

    $result = mysqli_query($con, $query);
    $data = mysqli_fetch_array($result);
    ?>

    <div class="col-5 offset-4 mt-3 border shadow p-3">
        <h3 class="fs-3 text-center">update Record</h3>

        <form action="#" method="post" enctype="multipart/form-data">

        <input type="text" class="form-control" name="id" value="<?php echo $data[0] ?>" readonly>

            <input type="text" name="name" value="<?php echo $data[1] ?>" placeholder="Enter Name:" class="form-control mt-2 mb-2" >

            <input type="text" name="age" value="<?php echo $data[2] ?>" placeholder="Enter Age:" class="form-control mb-2">

       
            <input type="text" name="salary" value="<?php echo $data[3] ?>" placeholder="Enter Salary:" class="form-control mb-2">

        
            <input type="text" name="mono" value="<?php echo $data[4] ?>" placeholder="Enter Mobile Number:" class="form-control mb-2">

            Upload Image:
            <input type="file" name="ImageUpload" required class="form-control mb-2">

            <input type="submit" value="insert" class="btn btn-info w-100" name="submitbtn">
        </form>



    </div>

</body>

<?php
if (isset($_POST["updatebtn"])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $salary = $_POST['salary'];
    $mono = $_POST['mono'];

    $query = "update employee set name='$name', age='$age', salary='$salary', mono='$mono' where eid='$id'";
    $run = mysqli_query($con, $query);

    if ($run) {
        echo "<script> window.location.href='viewData.php' </script>
        ";
    }
}

?>

</html>