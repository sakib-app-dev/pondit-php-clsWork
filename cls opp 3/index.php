<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
</head>
<body>
    
    <?php


        $students=[
            ['id'=>'111','name'=>'sakib'],
            ['id'=>'121', 'name'=>'Rakib'],
        ];

        echo("<pre>");
        print_r($students);
        // exit();


    
    
    ?>


<table border="1" align="center" >
    <thead>
        <tr>
            <th>id</th>
            <th>Name</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($students as $data) {?>
            
        
        <tr>
            <td><?= $data['id']; ?></td>
            <td><?= $data ['name'];?></td>
        </tr>
        <?php }?>
    </tbody>
</table>





</body>
</html>