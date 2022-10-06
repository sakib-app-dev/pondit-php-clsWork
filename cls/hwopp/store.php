<?php 
//return; on futher execution
if($_SERVER['REQUEST_METHOD']!=='POST'){
echo 'Only Post Request Allowed here';
die;
//return;
}
 //include_once './app/Controllers/Student.php';
 include_once './vendor/autoload.php';
 use Project\Controllers\Student;
 $student= new Student();

 if(isset($_SESSION['errors'])){
   header('Location: ./create.php');
 }else{
 $student->store($_POST);
 header('Location: ./index.php');}
    ?>