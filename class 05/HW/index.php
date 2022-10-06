<?php
$var= "any text can be here text Text";
$search="/text/i"; //txet ta ase kin aseta heck korbe
echo preg_match($search,$var);

echo('<br>');
$search="/text/i"; //koto ber ase seta dekhabe
echo preg_match_all($search,$var);


$var1= "any text can be here text Text";
$search1="/text/i";
echo('<br>');
echo preg_replace($search1,"Font",$var1);




$student=array('kamal','jamal','karim');

foreach ($student as $key=>$stu){
  echo "student name $key:$stu <br>";
}

for ($i=0; $i=count($student);$i++){
  echo "$student[$i].<br>";
}
?>