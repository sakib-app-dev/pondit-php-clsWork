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
//showing information of <?=$_GET['id']


include_once './vendor/autoload.php';
 use Project\Controllers\Student;
 $student= new Student();

 $studentInfo=$student->details($_GET['id']);
 //header('Location: ./index.php');

 //print_r($studentInfo);

 ?>

<div style="width: 500px; margin:0 auto;">
<a href="./index.php">List</a>
<form action="./update.php?id=<?=$studentInfo['id'] ?>" method="post">
  <!--  <input type="text" value="<?=$studentInfo['id'] ?>" name="id" placeholder="Enter Student Id"> <br>
    <input type="text" value="<?=$studentInfo['name'] ?>" name="name" placeholder="Enter Student Name"> -->
    <table id="ta" class="place">


<tr>

    <td>Student_id</td>

    <td> <input type="text" name="id"  value="<?=$studentInfo['id'] ?>"  required placeholder="Enter Student ID" /> </td>
</tr>


<tr>

    <td>Student Name</td>

    <td> <input type="text" name="name" value="<?=$studentInfo['name'] ?>" placeholder="Enter Student Name"> </td>
</tr>


<tr>
    <td> Password</td>
    <td><input type="password" name="password" value="<?=$studentInfo['password'] ?>" placeholder="enter a password" required /> </td>



</tr>







<tr>
    <td>
        <label for="user_type">User Type:</label>
    </td>
    <td>
        <select id="user_type" name="user_type" value="<?=$studentInfo['user_type'] ?? [] ?>"  required>
            <option value="">--select--</option>

            <option value="Academic_Staff">Academic</option>
            <option value="NON_Academic">Gurdian</option>
            <option value="Student">Student</option>
        </select>
    </td>

</tr>

<tr>
    <td> First Name </td>
    <td> <input type="textbox" name="first_name" value="<?=$studentInfo['first_name'] ?? [] ?>" placeholder="Enter  First NAme" required /> </td>

</tr>


<tr>
    <td> Last Name </td>
    <td> <input type="textbox" name="last_name"  value="<?=$studentInfo['last_name'] ?? [] ?>" placeholder="Enter last NAME" required /> </td>

</tr>
<tr>
    <td> Age </td>
    <td> <input type="tel" name="age"  value="<?=$studentInfo['age']??[] ?>" placeholder="Enter your age" required /> </td>

</tr>

<tr>
    <td> Email </td>
    <td> <input type="email" name="email"  value="<?=$studentInfo['email']??[] ?>" placeholder="Enter a Email ID" required /> </td>

</tr>

<tr>
    <td> Contact NO </td>
    <td> <input type="textbox" name="contact_no" value="<?=$studentInfo['contact_no'] ?? [] ?>" placeholder="Enter a Contact No" required /> </td>

</tr>



<tr>
    <td>
        Gender:</td>

    <td>
        Male<input type="radio" name="gender" value="Male" required value="<?=$studentInfo['gender'] ?? [] ?>" />
        Female<input type="radio" name="gender" value="Female" required />
    </td>


</tr>


<tr>


    <br>

    <td>
        Submit
    </td>


    <td> <button>Update</button></td>



</tr>


</table>
    
</form>
</div>
</body>
</html>




<!-- <a href="./index.php">List</a>
<h1>
    Detail Info </h1>
    <p> Student ID: <?= $studentInfo['id']?></p>

    <p> Student Name: <?= $studentInfo['name']?></p> -->
