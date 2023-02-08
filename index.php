<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Attendance System</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">

</head>
<body>
  <div class="container-fluid">

  <header class =" text-white text-center mb-3 py-3">

  <div class="row">
    <div class="col-12">
      <h1>SMART ATTENDANCE MANAGEMENT SYSTEM!</h1>
      <h3>STUDENTS ATTENDANCE OF MONTH: <u><?php echo strtoupper(date("F")); ?></u> </h3>


    </div>
  </div>
  </header>
  <div class="row">
            <div class="col-8">
                <?php require_once("SmartAttendanceSheet.php"); ?>
            </div>
            <div class="col-4">
                <?php require_once("addingStudents.php"); 
                    echo "<hr>";
                    require_once("addAttendance.php");
                ?>
            </div>
  </div>


    

</body>
</html>

<?php

require_once("SmartAttendanceSheet.php");



  echo "<br><br><hr><br><br>";

require_once("addingStudents.php");



?>