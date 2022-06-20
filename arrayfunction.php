<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array function</title>
</head>
<body>
    <?php
       $marks1=array(67,87,89,55,89,56);
       $marks2=array(22,56,77,88,99,67);
       $marks3=array(83,85,67,56,65,67);
       $cars=array("Hundai"=>101,"Kia"=>73,"Nissan"=>67,"TATA"=>96);
       
       print_r($marks1);
       echo"<br>";
       print_r(array_reverse($marks1));

       echo"<br>";

       if(array_search(56,$marks1)===false)
       {
           echo"array not found";
       }
       else
       {
           echo array_search(56,$marks1);
           echo"<br>";
           echo $marks1[array_search(56,$marks1)];
       }

       echo "<br>";

       print_r(array_intersect($marks1,$marks2,$marks3));


     ?>
    
</body>
</html>