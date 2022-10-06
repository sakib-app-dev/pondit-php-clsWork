<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CGPA Calculator</title>
</head>
<body>

    <form action="calculation.php" method="post">
        <table>
            <tr>
                <td>
                <label for="">Sub 1:</label>
                <input type="number" name="sub1" id="sub1">
                <!-- <input type="readable" name="sub1_num" id="sub1" value="100"> -->

                </td>
            </tr>

            <tr>
                <td>
                <label for="">Sub 2:</label>
                <input type="number" name="sub2" id="sub2">
                <!-- <input type="readable" name="sub2_num" id="sub1" value="100"> -->
                </td>
            </tr>

            <tr>
                <td>
                    <input type="submit" name="btn" value="Calculate">
                </td>
            </tr>
        </table>       
            
        
            
        
    </form>
    
</body>
</html>