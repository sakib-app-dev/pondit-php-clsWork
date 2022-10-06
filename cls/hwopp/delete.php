<?php
// echo "deleting";

// echo $_GET['id'];


// $students=[

//     ['id'=>'111','name'=>'Mr X'],
//     ['id'=>'112','name'=>'Mr X'],
// ];

//session_start();


//header('Location: ./index.php');
//print_r($students);


include_once './vendor/autoload.php';
 use Project\Controllers\Student;
 $student= new Student();

 $student->destroy($_GET['id']);
 header('Location: ./index.php');