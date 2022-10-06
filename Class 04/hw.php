<?php
$result=69.5;
if($result>79 && $result<=100)
{
    echo " A+";
}
elseif($result>69 && $result<=79)
{
    echo "A";
}
elseif($result>=60 && $result<=69)
{
    echo "A-";
}
elseif($result>=50 && $result<=59)
{
    echo "B";
}
elseif($result>=40 && $result<49)
{
    echo "C";
}
elseif($result>=33 && $result<=39)
{
    echo "D";
}
elseif($result>=0 && $result<=32)
{
    echo "FAIL";
}
else{
    echo 'Input is not Correct';
}


?>