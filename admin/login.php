<?php
    $error = false;
    include '../partials/_dbconnect.php';
    if(isset($_POST['pass'])){
        $sql = "SELECT * FROM `admin`";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $d_pass = $row['pass'];
        $pass = $_POST['pass'];
        if(password_verify($pass, $d_pass)){
            session_start();
            $_SESSION['admin'] = true;
            header('location: ../admin');
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

    <title>Admin Login</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

<body>
    <div class="container my-3">
        <form action="login.php" method="post">
            <div class="mb-3">
                <label for="pass" class="form-label">Password</label>
                <input type="password" class="form-control" id="pass" name="pass">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
    <?php
        if($error){
            echo "<script>
            Swal.fire({
                title: '<h3>Error</h3>',
                icon: 'error',
                html:
                '<h3>Password Not Matched</h3>',
            })
        </script>";
        }
        if($_GET['login']){
            echo "<script>
            Swal.fire({
                title: '<h3>Error</h3>',
                icon: 'error',
                html:
                '<h3>You must log in first</h3>',
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