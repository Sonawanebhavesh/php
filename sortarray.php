<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sort array</title>
</head>
<body>
    <?php
       $marks=array(22,56,77,88,99,67,45,687,83,85,67,56,65,67);
       $cars=array("Hundai"=>101,"Kia"=>73,"Nissan"=>67,"TATA"=>96);

       sort($marks);
       print_r($marks);
       
       echo"<br><br>";

       rsort($marks);
       print_r($marks);

       echo"<br><br>";

       asort($cars);
       print_r($cars);

       echo"<br><br>";

       arsort($cars);
       print_r($cars);

       echo"<br><br>";
       
        arsort($cars);
        print_r($cars);

        echo"<br><br>";
       
        ksort($cars);
        print_r($cars);
        
        echo"<br><br>";
       
        krsort($cars);
        print_r($cars);
    ?>
    
</body>
</html>