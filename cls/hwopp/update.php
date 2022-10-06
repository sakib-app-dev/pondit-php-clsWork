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

//  $student->update($_POST);
//  header('Location: ./index.php');

echo '<pre>';
print_r ($_POST);
$student->update($_POST,$_GET['id']);
header('Location: ./index.php');
    ?>