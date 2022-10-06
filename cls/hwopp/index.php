<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   // include_once './store.php';
   session_start();
   $students =$_SESSION['students'] ?? [];
  // $students =$_SESSION['students'] ? $_SESSION['students'];
   ?>

    <div style="width: 500px; margin:0 auto;">
  <h1> <a href="./create.php">Create</a> </h1>
  <br>

<?php if(isset($_SESSION['message'])){
echo $_SESSION['message'] ?? null;
//it is called null colision
unset ($_SESSION['message']);
}
 ?> 


<table border="1" style="width: 500px; margin:0 auto;">
       <thead>
<tr>

<th>ID</th>
<th>Name</th>
<th> Emaill</th>
<th>Contact </th>
<th>Action</th>

</tr>

       </thead>
       <tbody>
           <?php

           
           foreach ($students as $student) { ?>
                 <tr>
               <td><?= $student['id']?></td>
                <td><?= $student['first_name']?></td>
                <td><?= $student['last_name']?></td>
                <td><?= $student['email']?></td>
                <td><?= $student['contact_no']?></td>
                <td>
                <a href="show.php?id=<?= $student['id']?>">Show</a>
                <a href="edit.php?id=<?= $student['id']?>">Edit</a>
                    <a href="delete.php?id=<?= $student['id']?>" onclick ="return confirm('are you confirm to delete')">Delete</a>
                  <!--<a href="delete.php?id=<?= $student['id']?>" onclick ="alert ('are you confirm to delete')">Delete</a> -->
                      
                      
                </td>
              </tr>
          <?php } ?>
           
       </tbody>
   </table> 
   </div>
</body>
</html>
