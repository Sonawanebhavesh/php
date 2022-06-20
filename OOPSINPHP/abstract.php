<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abstract Method</title>
</head>
<body>
     <?php
       abstract class A
       {
           public abstract function area($r); 
       }

       class cylinder extends A
       {
           public function area($r)
           {
               echo"Area of cylinder = ".(2*(22/7))*$r;
           }
       }

       $obj=new A;
       $obj=area(22);
     
     ?>
    
</body>
</html>