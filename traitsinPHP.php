<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traits In PHP</title>
</head>
<body>
    <?php
     trait calculate
     {
         function add($x,$y)
         {
             if(is_array($x) && is_array($y))
             {
                 for($i=0;$i<count($x);$i++)
                 {
                     echo"<br>".$x[$i]+$y[$i];
                 }
             }
             else
             {
                echo"Addition:".$x+$y."<br>";
             }
             
         }
         function sub($x,$y)
         {
             echo"Substraction:".$x-$y;
         }
     }

     class temp
     {
         use calculate;
         function cal($a,$b)
         {
            $this->add($a,$b);
            //$this->sub($a,$b);
         }
         
     }

     $obj=new temp();
     //$obj->cal(40,50)

     $obj->cal(array(2,4,6),array(2,5,4));
    
    ?>
    
</body>
</html>