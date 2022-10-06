<?php

$cars=[
    
    ["Volvo",22,18],
    ["BMW",15,13,],
    ["Saab",5,2,],
    ["Land Rover",17,15]
    ];


    foreach($cars as $key=>$values){
        echo"car name: ";
        foreach($values as $key=>$car){
            echo "$car Model: ";
        }
        echo "<br>";
    }