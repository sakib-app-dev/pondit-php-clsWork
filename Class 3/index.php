<?php

  

    $a=10;
    if($a==10)
    {
        echo $a;
    }else{
        echo "Nothing";
    }

  // tarnary operator
    $a=2;
    $a=($a==10)? "$a" : "Nothing";
    echo $a;


    echo '<br> =============';
    
    
    // $user="User name";

    $x= isset($user)? "Logged in" : "Sign Up";
    echo $x;

    echo '<br>=============';

    $message="Your information Save Successfully";

    echo isset($message)? "$message": " Something Wrong! Try Again ";

    echo $message?? 'Try Again';
    

?>