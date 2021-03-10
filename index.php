<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <title>Zoom Link</title>
    <!-- extra css -->

    <style>
    body{
        background-color: black !important;
        color: white;
    }
    .card-header, .card-body, .card-footer{
        background-color: black !important;
    }
    .fix {
        display: flex;
        justify-content: right;
    }

    h3 {
        color: green;
    }
    #clock{
        color: white;
        font-size: 2rem;
    }
    #datebl{
        font-size: 1.3rem;
    }
    </style>
</head>

<body>
    <!-- including navbar and more -->
    <?php 
    include 'partials/_header.php';
    ?>
    <!-- device time notice -->
    <div class="container">

        <h2 class="text-danger my-3">Please insure that <b> your device time is set correctly </b> before using our
            website.
            otherwise it will missbehave</h2>
        <!-- clock -->
        <!-- <div class="fix">
            <div class="cleanslate w24tz-current-time w24tz-middle"
                style="display: inline-block !important; visibility: hidden !important; min-width:300px !important; min-height:145px !important;">
                <p><a href="//24timezones.com/Dhaka/time" style="text-decoration: none" class="clock24"
                        id="tz24-1607580498-c173-eyJob3VydHlwZSI6MTIsInNob3dkYXRlIjoiMSIsInNob3dzZWNvbmRzIjoiMSIsImNvbnRhaW5lcl9pZCI6ImNsb2NrX2Jsb2NrX2NiNWZkMWJiNTJkYWE1YSIsInR5cGUiOiJkYiIsImxhbmciOiJlbiJ9"
                        title="Dhaka Time" target="_blank" rel="nofollow">Time in Dhaka</a></p>
                <div id="clock_block_cb5fd1bb52daa5a"></div>
            </div>
        </div> -->
        <!-- <script type="text/javascript" src="//w.24timezones.com/l.js" async></script> -->
        <div class="container">
            <div id="clock"></div>
            <div id="datebl"></div>
        </div>
        <h2 class="text-danger my-3">Exams are on the way visit <b>Exam Section</b> for more details</h2>
        <div class="card text-center my-3">
            <div class="card-header">
                Classes
            </div>
            <div class="card-body">
                <h5 id="teach" class="card-title"></h5>
                <p id="passbl" class="card-title"></p>
                <a id="button" class="btn btn-outline-danger" target="_blank">Join class</a>
                <a href="exam.php" class="btn btn-primary">Visit Exam Section</a>
            </div>
            <div class="card-footer text-muted">

            </div>
        </div>
    </div>



    <?php
    // alerts
    if(isset($_GET['logout']) && $_GET['logout'] == true){
        echo "<script>
        Swal.fire({
            title: '<h3>Success</h3>',
            icon: 'success',
            html:
            '<h3>You are successfully logged out</h3>',
        })
    </script>";
    }
    ?>

    <script src="service.js"></script>
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