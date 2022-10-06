<?php

include_once './src/class.php';
// include_once './vendor/autoload.php'; 

use src\class\Cgpa;
// if(isset($_POST['btn'])){
    // include "class.php";
    
    $sub1=$_POST['sub1'];
    $sub2=$_POST['sub2'];
    $res=$sub1+$sub2;
    $num=$res/2;
    $cgpa=new Cgpa;
    echo $cgpa=$cgpa->cgpa1($num);
  
 



// }






?>