<?php

// $name="Checking  Error";


echo ($name)?'loged in': "Sign Up";

echo'<br>';
// isset variable error handling control build-in-function
echo isset($name)?'loged in': "Sign Up";


echo '<br>';
//null collapsing
echo ($name)??"Not Logged in";



include "session.php";
 echo $name;

//  session_disroy();


?>