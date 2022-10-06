
<?php
//showing information of <?=$_GET['id']


include_once './vendor/autoload.php';
 use Project\Controllers\Student;
 $student= new Student();

 $studentInfo=$student->details($_GET['id']);
 //header('Location: ./index.php');

 //print_r($studentInfo);

 ?>

  <h1> <a href="./index.php">List</a> </h1>
<h1>
    Detail Info </h1>
    <p> Student ID: <?= $studentInfo['id']?></p>

    <p> Student Name: <?= $studentInfo['name']?></p>
     
     
    <p> User Type: <?= $studentInfo['user_type']?></p>
    <p> First Name: <?= $studentInfo['first_name']?></p>
    <p> Last Name: <?= $studentInfo['last_name']?></p>
    <p> Gender: <?= $studentInfo['gender']?></p>
    <p> Email: <?= $studentInfo['email']?></p>
    <p> Contact No: <?= $studentInfo['contact_no']?></p>
    