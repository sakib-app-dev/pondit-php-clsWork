<?php
$student=[
    'cse'=>[
        ['name'=>'Tamim' , 'email'=>'tamim@mail.com' ,'result'=>'4'],
        ['name'=>'Samim' , 'email'=>'tamim@mail.com' ,'result'=>'4'],
    ],
    'bba'=>[
        ['name'=>'mim' , 'email'=>'tamim@mail.com' ,'result'=>'4'],
        ['name'=>'Fahim' , 'email'=>'tamim@mail.com' ,'result'=>'4'],
    ],
    ];

    
    foreach ($student as $key => $value)
     {
        echo("<br>");
        echo "Depertment: ".strtoupper($key)."<br>";
        echo "Students: ";
        foreach ($value as $key => $val) 
        {    
        
            echo"<br>".++$key.". " ;
            foreach ($val as $key => $lastvalue) 
            {
                echo $res=ucwords($key).": ".$lastvalue.", ";
                echo $name= $lastvalue['name'];             
            }
        
        }echo "<br>";       
    }