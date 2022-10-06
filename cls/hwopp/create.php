<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div style="width: 500px; margin:0 auto;">
        <a href="./index.php">List</a>
        <form action="./store.php" method="post">
           <!-- <input type="text" name="id" placeholder="Enter Student Id"> <br>
            <input type="text" name="name" placeholder="Enter Student Name">
            <button>Add</button> -->
<?php
session_start(); 
$err=$_SESSION['errors'];

foreach ($err as $error) {
    echo $error."<br>";
}?>
            <table id="ta" class="place">


                <tr>

                   
                    <td> <label for="id"> Student Id</label> </td>
                    <td> <input type="text" name="id"  placeholder="Enter Student ID" /> </td>
                </tr>




                <tr>
                    <td> First Name </td>
                    <td> <input type="text" name="first_name" placeholder="Enter  First NAme"  /> </td>

                </tr>


                <tr>
                    <td> Last Name </td>
                    <td> <input type="text" name="last_name" placeholder="Enter last NAME"  /> </td>

                </tr>


                <tr>
                    <td> Email </td>
                    <td> <input type="email" name="email" placeholder="Enter a Email ID"  /> </td>

                </tr>

                <tr>
                    <td> Contact NO </td>
                    <td> <input type="text" name="contact_no" placeholder="Enter a Contact No"  /> </td>

                </tr>











                <tr>


                    <br>

                    <td>
                        Submit
                    </td>


                    <td> <button>Add</button></td>



                </tr>


            </table>
        </form>
    </div>
</body>

</html>