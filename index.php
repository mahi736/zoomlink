<?php
date_default_timezone_set('Asia/Dhaka'); // seting our timezone
$time_string = date("Gi"); // returns a string
$time = (int)$time_string; // converting the string to integar
// setting up Default values of the routine
$exam_1 = false;
$exam_2 = false;
$no_exam = true;
$no_class = true;
$class_1 = false;
$class_2 = false;
include 'partials/_dbconnect.php';
// setting the routine.
if($time > 945 && $time <= 1050){
    $exam_1 = true;
    $no_exam = false;
}
if($time > 1050 && $time <= 1140){
    $exam_2 = true;
    $no_exam = false;
}
if($time > 1140 && $time <= 1230){
    $class_1 = true;
    $no_class = false;
}
if($time > 1230 && $time <= 1320){
    $class_2 = true;
    $no_class = false;
}
// if(date('l') == "Friday"){
// }

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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <title>Zoom Link</title>
    <!-- extra css -->

    <style>
    .fix {
        display: flex;
        justify-content: right;
    }

    h3 {
        color: green;
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
        <div class="fix">
            <div class="cleanslate w24tz-current-time w24tz-middle"
                style="display: inline-block !important; visibility: hidden !important; min-width:300px !important; min-height:145px !important;">
                <p><a href="//24timezones.com/Dhaka/time" style="text-decoration: none" class="clock24"
                        id="tz24-1607580498-c173-eyJob3VydHlwZSI6MTIsInNob3dkYXRlIjoiMSIsInNob3dzZWNvbmRzIjoiMSIsImNvbnRhaW5lcl9pZCI6ImNsb2NrX2Jsb2NrX2NiNWZkMWJiNTJkYWE1YSIsInR5cGUiOiJkYiIsImxhbmciOiJlbiJ9"
                        title="Dhaka Time" target="_blank" rel="nofollow">Time in Dhaka</a></p>
                <div id="clock_block_cb5fd1bb52daa5a"></div>
            </div>
        </div>
        <script type="text/javascript" src="//w.24timezones.com/l.js" async></script>
        <h2 class="text-danger my-3">Exams are on the way visit <b>Exam Section</b> for more details</h2>
        <!-- exam section  -->
        <?php
            if($no_exam){
                echo '<div class="card text-center my-3">
                <div class="card-header">
                    Exams
                </div>
                <div class="card-body">
                    <h5 class="card-title">There is no exams Right now</h5>
                    <a href="exam.php" class="btn btn-primary">Visit Exam Section</a>
                </div>
                <div class="card-footer text-muted">
                    
                </div>
            </div>';
            }
            if($exam_1){
                $sql = "SELECT * FROM `exams` WHERE `no.` = 1";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                $subject = $row['subject'];
                echo '<div class="card text-center my-3">
                <div class="card-header">
                    Exams
                </div>
                <div class="card-body">
                    <h5 class="card-title">'. $subject .' Exam (RK Sir)</h5>
                    <p class="card-text">Id: 5152750300 pass: rk@rumc</p>
                    <a href="https://us05web.zoom.us/j/5152750300?pwd=RDRSWGxqT0pIUWNPcXIyTU1pSFJZUT09" target="_blank" class="btn btn-outline-danger">Join Exam</a>
                    <a href="exam.php" class="btn btn-primary">View Details</a>
                </div>
                <div class="card-footer text-muted">
                </div>
            </div>';
            }
            if($exam_2){
                $sql = "SELECT * FROM `exams` WHERE `no.` = 2";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                $subject = $row['subject'];
                echo '<div class="card text-center my-3">
                <div class="card-header">
                    Exams
                </div>
                <div class="card-body">
                    <h5 class="card-title">'. $subject .' Exam (INL Miss)</h5>
                    <p class="card-text">Id: 9112900414 pass: inl@rumc</p>
                    <a href="https://us04web.zoom.us/j/9112900414?pwd=YU80RXd1V0JwVVFkK0JOZWVMSDJUQT09" target="_blank" class="btn btn-outline-danger">Join Exam</a>
                    <a href="exam.php" class="btn btn-primary">View Details</a>
                </div>
                <div class="card-footer text-muted">
                </div>
            </div>';
            }
        ?>
        
        <!-- class section -->
        <?php
            if($no_class){
                echo '<div class="card text-center my-3">
                <div class="card-header">
                    Classes
                </div>
                <div class="card-body">
                    <h5 class="card-title">There is no class Right now</h5>
                    <a href="exam.php" class="btn btn-primary">See Routine</a>
                </div>
                <div class="card-footer text-muted">
                    
                </div>
            </div>';
            }
            if($class_1){
                $sql = "SELECT * FROM `classes` WHERE `no.` = 1";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                $teacher = $row['teacher'];
                $subject = $row['subject'];
                $sql = "SELECT * FROM `teachers` WHERE `teacher` = '$teacher'";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                echo '<div class="card text-center my-3">
                <div class="card-header">
                    Classes
                </div>
                <div class="card-body">
                    <h5 class="card-title">'. $subject .' ('. $row['teacher'] .' '. $row['gender'] .')</h5>
                    <p class="card-text">Id: '. $row['id'] .' pass: '. $row['pass'] .'</p>
                    <a href="'. $row['link'] .'" target="_blank" class="btn btn-outline-danger">Join Class</a>
                    <a href="exam.php" class="btn btn-primary">View Details</a>
                </div>
                <div class="card-footer text-muted">
                </div>
            </div>';
            }
            if($class_2){
                $sql = "SELECT * FROM `classes` WHERE `no.` = 2";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                $teacher = $row['teacher'];
                $subject = $row['subject'];
                $sql = "SELECT * FROM `teachers` WHERE `teacher` = '$teacher'";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                echo '<div class="card text-center my-3">
                <div class="card-header">
                    Classes
                </div>
                <div class="card-body">
                    <h5 class="card-title">'. $subject .' ('. $row['teacher'] .' '. $row['gender'] .')</h5>
                    <p class="card-text">Id: '. $row['id'] .' pass: '. $row['pass'] .'</p>
                    <a href="'. $row['link'] .'" target="_blank" class="btn btn-outline-danger">Join Class</a>
                    <a href="exam.php" class="btn btn-primary">View Details</a>
                </div>
                <div class="card-footer text-muted">
                </div>
            </div>';
            }
        ?>
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