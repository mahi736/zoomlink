<?php
session_start(); // statrs the session
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

    <title>Exam Section</title>
    <style>
    .img-fluid {
        height: 100%;
        width: 100%;
        margin-top: 10px;
    }

    .fix {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 100px;
    }
    </style>
</head>

<body>
    <!-- including navbar and more -->
    <?php
      include 'partials/_exheader.php';
      ?>
    <div class="container my-3">
        <h1>SSC Short Syllabus</h1>
    </div>
    <div class="fix">
        <a href="images/ssc-short.jpg" download class="btn btn-primary">Download Syllabus (Jpeg)</a>
    </div>
    <div class="container">
        <img src="images/ssc-short.jpg" class="img-fluid" alt="Exam Routine Image">
    </div>
    <hr>
    <div class="container">
        <h1>SSC Result Improvement Exams routine (Expired)</h1>
    </div>
    <div class="fix">
        <a href="exam.pdf" class="btn btn-primary">Download Routine (PDF)</a>
    </div>
    <div class="container">
        <img src="images/1.png" class="img-fluid" alt="Exam Routine Image">
        <img src="images/2.png" class="img-fluid" alt="Exam Routine Image">
        <img src="images/3.png" class="img-fluid" alt="Exam Routine Image">
        <img src="images/4.png" class="img-fluid" alt="Exam Routine Image">
        <img src="images/5.png" class="img-fluid" alt="Exam Routine Image">
        <img src="images/6.png" class="img-fluid" alt="Exam Routine Image">
    </div>

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