<?php
    $success = false;
    $error = false;
    include '../partials/_dbconnect.php';
    session_start();
    if(!isset($_SESSION['admin'])){
        header('location: login.php?login=true;');
    }
    if(isset($_POST['sub1'])){
        $subject = $_POST['sub1'];
        $sql = "UPDATE `exams` SET `subject` = '$subject' WHERE `exams`.`e_id` = 1";
        if($result = mysqli_query($conn, $sql)){
            $success = true;
        }
        else{
            $error = true;
        }
    }
    if(isset($_POST['sub2'])){
        $subject = $_POST['sub2'];
        $sql = "UPDATE `exams` SET `subject` = '$subject' WHERE `exams`.`e_id` = 2";
        if($result = mysqli_query($conn, $sql)){
            $success = true;
        }
        else{
            $error = true;
        }
    }
    if(isset($_POST['c_sub1'])){
        $subject = $_POST['c_sub1'];
        $teacher = $_POST['teach1'];
        $sql = "UPDATE `classes` SET `subject` = '$subject' WHERE `classes`.`c_id` = 1";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE `classes` SET `teacher` = '$teacher' WHERE `classes`.`c_id` = 1";
        if($result = mysqli_query($conn, $sql)){
            $success = true;
        }
        else{
            $error = true;
        }
    }
    if(isset($_POST['c_sub2'])){
        $subject = $_POST['c_sub2'];
        $teacher = $_POST['teach2'];
        $sql = "UPDATE `classes` SET `subject` = '$subject' WHERE `classes`.`c_id` = 2";
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE `classes` SET `teacher` = '$teacher' WHERE `classes`.`c_id` = 2";
        if($result = mysqli_query($conn, $sql)){
            $success = true;
        }
        else{
            $error = true;
        }
    }
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

<body>
    <div class="container my-3">
        <?php
            $sql = "SELECT * FROM `exams` WHERE `no.` = 1";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            echo '<h3>Exam 1</h3>
            <form action="index.php" method="post">
                <div class="mb-3">
                    <label for="sub1" class="form-label">Subject</label>
                    <input type="text" class="form-control" id="sub1" name="sub1" value="'. $row['subject'] .'">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>';

            $sql = "SELECT * FROM `exams` WHERE `no.` = 2";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            echo '<h3>Exam 2</h3>
            <form action="index.php" method="post">
                <div class="mb-3">
                    <label for="sub2" class="form-label">Subject</label>
                    <input type="text" class="form-control" id="sub2" name="sub2" value="'. $row['subject'] .'">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>';

            $sql = "SELECT * FROM `classes` WHERE `no.` = 1";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
        echo '<h3>Class 1</h3>
        <form action="index.php" method="post"> 
            <div class="mb-3">
                <label for="c_sub1" class="form-label">Subject</label>
                <input type="text" class="form-control" id="c_sub1" name="c_sub1" value="'. $row['subject'] .'">
            </div>
            <div class="mb-3">
                <label for="teach1" class="form-label">teacher</label>
                <input type="text" class="form-control" id="teach1" name="teach1" value="'. $row['teacher'] .'">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>';
        
        
        $sql = "SELECT * FROM `classes` WHERE `no.` = 2";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
        echo '<h3>Class 2</h3>
        <form action="index.php" method="post">
            <div class="mb-3">
                <label for="c_sub2" class="form-label">Subject</label>
                <input type="text" class="form-control" id="c_sub2" name="c_sub2" value="'. $row['subject'] .'">
            </div>
            <div class="mb-3">
                <label for="teach2" class="form-label">teacher</label>
                <input type="text" class="form-control" id="teach2" name="teach2" value="'. $row['teacher'] .'">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>';
        ?>
    </div>
    <?php
        if($success){
            echo "<script>
            Swal.fire({
                title: '<h3>Success</h3>',
                icon: 'success',
                html:
                '<h3>success</h3>',
            })
        </script>";
        }
        if($error){
            echo "<script>
            Swal.fire({
                title: '<h3>error</h3>',
                icon: 'error',
                html:
                '<h3>error</h3>',
            })
        </script>";
        }
    ?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>